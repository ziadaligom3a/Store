<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="/Login.css">
    </head>
    <body>
        <form method="post" action="/Register">
            @csrf
        <div class="p-card-body"><!----><!---->

            <div class="p-card-content"><form _ngcontent-mgw-c112="" novalidate="" 
                class="ng-pristine ng-invalid ng-touched">

                <div _ngcontent-mgw-c112="" class="p-fluid">

                    <h1 _ngcontent-mgw-c112="" id="login-title-txt">Sign In</h1>

                    <div _ngcontent-mgw-c112="" class="p-field">

                        <label _ngcontent-mgw-c112="" for="service-no" class="required">Name</label>

                        <p-inputmask _ngcontent-mgw-c112="" id="name" inputid="login-service-number-et" formcontrolname="username" mask="99999999999" slotchar="" class="p-inputtext-sm ng-pristine ng-invalid ng-touched">


                            <input name="name" pinputtext="" class="p-inputmask p-inputtext p-component" id="login-service-number-et" type="text" placeholder="Name"></p-inputmask><div _ngcontent-mgw-c112="" class="ng-star-inserted"><!----><!----></div><!----></div>


                    <div _ngcontent-mgw-c112="" class="p-field">

                        <label _ngcontent-mgw-c112="" for="service-no" class="required">Username</label>

                        <p-inputmask _ngcontent-mgw-c112="" id="service-no" inputid="login-service-number-et" formcontrolname="username" mask="99999999999" slotchar="" class="p-inputtext-sm ng-pristine ng-invalid ng-touched">


                            <input name="username" pinputtext="" class="p-inputmask p-inputtext p-component" id="login-service-number-et" type="text" placeholder="Username"></p-inputmask><div _ngcontent-mgw-c112="" class="ng-star-inserted"><!----><!----></div><!----></div>
                            

                    <div _ngcontent-mgw-c112="" class="p-field">

                        <label _ngcontent-mgw-c112="" for="Email" class="required">Email</label>

                        <p-inputmask _ngcontent-mgw-c112="" id="Email" inputid="login-service-number-et" formcontrolname="username" mask="99999999999" slotchar="" type="email" class="p-inputtext-sm ng-pristine ng-invalid ng-touched">


                            <input name="email" pinputtext="" class="p-inputmask p-inputtext p-component" id="login-service-number-et" type="text" placeholder="Email"></p-inputmask><div _ngcontent-mgw-c112="" class="ng-star-inserted"><!----><!----></div><!----></div>

                            <div _ngcontent-mgw-c112="" class="p-field"><label _ngcontent-mgw-c112="" for="password" class="required">Password</label>
                                
                            
                                
                                <input name="password" id="login-password-et" type="password" formcontrolname="password" pinputtext="" class="p-inputtext-sm ng-untouched ng-pristine ng-invalid p-inputtext p-component" placeholder="Password">
                            
                            </div><!---->
                                
                            <button _ngcontent-mgw-c112="" icon="p-hidden" pbutton="" type="submit" id="login-register-btn" class="w-100 p-button p-component" tabindex="0">
                                    
                                <span class="p-button-icon p-button-icon-left p-hidden" aria-hidden="true"></span><span class="p-button-label">Login</span></button><hr _ngcontent-mgw-c112="">
                                
                                </div></form><!----></div><!----></div>
                                @dd(Session::get('success'))
    </body>
</html>