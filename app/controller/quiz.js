(function() {
    var questions = [{
      question: "O primeiro filme da saga foi lançado em",
      choices: [1978, 1976, 1983, 1977, 1975],
      correctAnswer: 0
     },{
       question: "E verdade que o rival de Anakin Skywalker na corrida de pods era Watto?",
       choices: ['Verdadeiro','Falso'],
       correctAnswer: 0
     }, {
       question: "O número da cela onde Leia ficou presa na Estrela da Morte era 2167?",
       choices: ['Sim','Não, era a cela de numero 2187'],
       correctAnswer: 1
     }, {
       question: "O planeta natal de Han Solo é Bespin?",
       choices: ['Corellia','Corolla','Bespin','Knowhere'],
       correctAnswer: 0
     }, {
       question: "Em seu duelo com Anakin, Obi-Wan corta todos os quatro membros de seu ex-pupilo?",
       choices: ['Sim, todos os quatro membros','Nem todos'],
       correctAnswer: 2
     }, {
         question: "A grande revelação de Darth Vader para Luke Skywalker: Eu sou seu...",
         choices: ['Pai','Filho','Avo','Irmao'],
         correctAnswer: 0
       }, {
         question: "É verdade que: Uma vez, Mestre Yoda, disse: Você ainda tem muito para aprender ?",
         choices: ['Verdadeira','Nunca Disse isso'],
         correctAnswer: 1
       }, {
         question: "C3PO é fluente em mais de oito milhões de formas de comunicação?",
         choices: ['Nao','Sim'],
         correctAnswer: 0
       }];
    
    var questionCounter = 0; //Tracks question number
    var selections = []; //Array containing user choices
    var quiz = $('#quiz'); //Quiz div object
    
    // Display initial question
    displayNext();
    
    // Click handler for the 'next' button
    $('#next').on('click', function (e) {
      e.preventDefault();
      
      // Suspend click listener during fade animation
      if(quiz.is(':animated')) {        
        return false;
      }
      choose();
      
      // If no user selection, progress is stopped
      if (isNaN(selections[questionCounter])) {
        alert('Por favor, selecione uma opção!');
      } else {
        questionCounter++;
        displayNext();
      }
    });
    
    // Click handler for the 'prev' button
    $('#prev').on('click', function (e) {
      e.preventDefault();
      
      if(quiz.is(':animated')) {
        return false;
      }
      choose();
      questionCounter--;
      displayNext();
    });
    
    // Click handler for the 'Start Over' button
    $('#start').on('click', function (e) {
      $('.score').hide();
      e.preventDefault();
      
      if(quiz.is(':animated')) {
        return false;
      }
      questionCounter = 0;
      selections = [];
      displayNext();
      
      $('#start').hide();
    });
    
    // Animates buttons on hover
    $('.button').on('mouseenter', function () {
      $(this).addClass('active');
    });
    $('.button').on('mouseleave', function () {
      $(this).removeClass('active');
    });
    
    // Creates and returns the div that contains the questions and 
    // the answer selections
    function createQuestionElement(index) {
      var qElement = $('<div>', {
        id: 'question'
      });
      
      var header = $('<h2 class="swFont">Pergunta ' + (index + 1) + ':</h2>');
      qElement.append(header);
      
      var question = $('<p class="swTitle fs-4">').append(questions[index].question);
      qElement.append(question);
      
      var radioButtons = createRadios(index);
      qElement.append(radioButtons);
      
      return qElement;
    }
    
    // Creates a list of the answer choices as radio inputs
    function createRadios(index) {
      var radioList = $('<ul>');
      var item;
      var input = '';
      for (var i = 0; i < questions[index].choices.length; i++) {
        item = $('<li>');
        input = '<input  type="radio" name="answer" value=' + i + ' />';
        input += questions[index].choices[i];
        item.append(input);
        radioList.append(item);
      }
      return radioList;
    }
    
    // Reads the user selection and pushes the value to an array
    function choose() {
      selections[questionCounter] = +$('input[name="answer"]:checked').val();
    }
    
    // Displays next requested element
    function displayNext() {
      quiz.fadeOut(function() {
        $('#question').remove();
        
        if(questionCounter < questions.length){
          var nextQuestion = createQuestionElement(questionCounter);
          quiz.append(nextQuestion).fadeIn();
          if (!(isNaN(selections[questionCounter]))) {
            $('input[value='+selections[questionCounter]+']').prop('checked', true);
          }
          
          // Controls display of 'prev' button
          if(questionCounter === 1){
            $('#prev').show();
          } else if(questionCounter === 0){
            
            $('#prev').hide();
            $('#next').show();
          }
        }else {
          var scoreElem = displayScore();
          quiz.append(scoreElem).fadeIn();
          $('#next').hide();
          $('#prev').hide();
          $('#start').show();
        }
      });
    }
    
    // Computes score and returns a paragraph element to be displayed
    function displayScore() {
      var score = $('<p class="swTitle text-center score" >',{id: 'question'});
      
      var numCorrect = 0;
      for (var i = 0; i < selections.length; i++) {
        if (selections[i] === questions[i].correctAnswer) {
          numCorrect++;
        }
      }
      
      score.append('Você acertou ' + numCorrect + ' questões de ' +
                   questions.length + ' ,Parabéns!!!');
      return score;
    }
  })();