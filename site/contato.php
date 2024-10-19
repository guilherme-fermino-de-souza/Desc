    <!--contato start--> <!--INÍCIO-->
    <section class="contato-principal">
        <div class="container-contato">
        <h1>FALE CONOSCO</h1>
        <h2>Rua Feliciano de Mendonça, 290 - Guaianazes - CEP: 08460-365 - SP</h2>
        <div class="text-contato">
                <div class="contato">
                    <form class="fale-conosco" name="fale-conosco" action="../site/contatoEnviar.php" method="post">                   
                                <!-- Pega o Nome e Email do usuário-->
                                <input type="hidden" name="nome"  value="<?php echo ($_SESSION['nome']);?>" required placeholder="Seu Nome" />
                                <input type="hidden" name="email" value="<?php echo ($_SESSION['email']);?>" placeholder="E-mail" />

                                <div class="textfield">
                                    <label for="assunto" class="label">Assunto:</label>
                                    <input type="text" class="input" name="assunto" required placeholder="Tema da mensagem" />
                                </div>

                                <div class="textfield">
                                    <label for="mensagem" class="label">Mensagem:</label>
                                    <input type="text" class="input" name="mensagem" required placeholder="Digite sua mensagem aqui" maxlength="250" />
                                </div> <!--Deixe este placeholder maior-->
                                <!--E se eu não quiser?-->
                                <div class="contato-enviar">
                                    <input type="submit" class="botao-enviar" name="botao" required placeholder="Enviar" />
                                </div>
                    </form>
                </div>  
                <div class="paragrafo-contato">
                        <p> Sua opinião é muito importante para nós! Se você tiver alguma dúvida, sugestão
                            ou precisar de assistência, não hesite em nos contatar. Nossa equipe dedicada
                            está pronta para ouvir e atender suas necessidades da melhor forma possível.
                            Estamos comprometidos em oferecer um atendimento ágil e eficaz, garantindo
                            que suas questões sejam resolvidas rapidamente.
                        <br>
                        <p> Além disso, sua experiência é fundamental para melhorarmos nossos serviços. 
                            Ao compartilhar suas ideias ou preocupações, você nos ajuda a criar um ambiente
                            ainda mais acolhedor e eficiente. Não deixe de nos enviar sua mensagem; estamos
                            ansiosos para conversar com você e tornar sua experiência conosco ainda mais positiva!</p>
                        </p>
                </div>
            </div>
        </div>  
    </section>