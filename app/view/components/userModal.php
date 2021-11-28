<div class="modal fade" id="userModalToggle" aria-hidden="true" aria-labelledby="userModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">

       
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-center swFont" id="userModalToggleLabel">Sign In</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="../../controller/users.php" class="needs-validation" novalidate>

                    <div class="form-group row">
                            <label for="validationUsuario" class="form-label  swFont">Usuário</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="validationUsuario" style="border: 1px solid #ffc500;" name="username" required>
                                <div class="invalid-feedback">
                                    Usuario ou senha incorretos
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="validationSenha" class="form-label  swFont">Senha</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control" id="validationSenha" style="border: 1px solid #ffc500;" name="password" required>
                                <div class="invalid-feedback">
                                Usuario ou senha incorretos
                                </div>
                            </div>
                        </div>

                    

                        <div class="d-grid gap-2 my-3">
                            <button type="submit" name="login" class="btn" style="color: white; border-color: #ffc500;background-color: #434343;">
                                Entrar
                            </button>
                        </div>
                        <p class=" text-center  swTitle">Não possui uma conta?</p>
                    </form>
                    <div class="text-center">
                        <button class="swTitle btn " style="color: #ffc500;" data-bs-target="#userModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Registre-se</button>
                    </div>

                </div>
                <div class="modal-footer">
                </div>
            </div>

       

    </div>
</div>

<div class="modal fade" id="userModalToggle2" aria-hidden="true" aria-labelledby="userModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="text-center swFont" id="userModalToggleLabel2">Crie sua conta</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="../../controller/users.php" class="needs-validation" novalidate>


                       <div class="form-group row">
                            <label for="validationRegisterUser" class="form-label  swFont">Usuário</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="validationRegisterUser" style="border: 1px solid #ffc500;" name="username" required>
                                <div class="invalid-feedback">
                                  Insira seu usuario
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="validationRegisterEmail" class="form-label  swFont">Password</label>
                            <div class="input-group has-validation">
                                <input type="email" class="form-control" id="validationRegisterEmail" style="border: 1px solid #ffc500;" name="email" required>
                                <div class="invalid-feedback">
                                 Insira seu @email
                                </div>
                            </div>
                        </div>
                        

                    <div class="form-group row">
                            <label for="validationRegisterSenha" class="form-label  swFont">Senha</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control" id="validationRegisterSenha" style="border: 1px solid #ffc500;" name="password" required>
                                <div class="invalid-feedback">
                                 Insira sua senha
                                </div>
                            </div>
                        </div>


                    <div class="d-grid gap-2 my-3">
                            <button type="submit" name="register" class="btn" style="color: white; border-color: #ffc500;background-color: #434343;">
                                 Criar Conta
                            </button>
                        </div>
                  
                    
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-sw" data-bs-target="#userModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Voltar</button>
            </div>
        </div>
    </div>
</div>