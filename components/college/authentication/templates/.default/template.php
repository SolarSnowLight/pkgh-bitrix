<?php
    $GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/college/authentication/templates/.default/css/authentication.css');
    $GLOBALS['APPLICATION']->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/bootstrap/bootstrap.css');
?>

<div class="login-block container-fluid">
    <div class="login-block__main container">
        <div class="row login-block__header">
            <div class="col-md-12">
                Вход
            </div>
        </div>
        <form name="form_auth" method="post" action="/auth/?login=yes" target="_top">
            <input type="hidden" name="AUTH_FORM" value="Y">
            <input type="hidden" name="TYPE" value="AUTH">
            <input type="hidden" name="backurl" value="/">
            <div class="row login-block__input-block justify-content-md-center login-block__input-block-border">
                <div class="col-md-12">
                    <div class="input-group align-items-center">
                        <div class="col-2">
                            <img src="/bitrix/components/college/authentication/images/people.png" alt="people_icon">
                        </div>
                        <input type="text" placeholder="Логин" class="form-control col" name="USER_LOGIN" maxlength="255">
                    </div>
                </div>
            </div>
            <div class="row login-block__input-block justify-content-md-center">
                <div class="row login-block__input-block-border">
                    <div class="col-md-12">
                        <div class="input-group align-items-center">
                            <div class="col-2">
                                <img src="/bitrix/components/college/authentication/images/key.png" alt="key_icon">
                            </div>
                            <input type="password" placeholder="Пароль" class="form-control col" name="USER_PASSWORD" maxlength="255" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="row login-block-main__reset-pass">
                    <div class="col-md-12">
                        <p><a href="">Забыли пароль?</a></p>
                    </div>
                </div>
            </div>
            <div class="row login-block__remember justify-content-md-center align-items-center">
                <div class="col-md-12">
                    <div class="input-group align-items-center">
                        <div class="col-md-1">
                            <input type="checkbox" name="USER_REMEMBER" value="Y">
                        </div>
                        <div class="col">
                            <p style="margin: 0">Запомнить меня</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center login-block-main__button">
                <div class="col-md-12">
                    <button class="btn" type="submit">Войти</button>
                </div>
            </div>
        </form>
    </div>
</div>