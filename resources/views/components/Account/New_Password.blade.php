<div class="contact-wrap w-100 p-md-5 p-4">
    <h3 class="mb-4" style="color:#fff">New Password</h3>
    <div id="form-message-warning" class="mb-4"></div>
    <form method="POST" id="contactForm" name="contactForm" enctype="multipart/form-data" novalidate="novalidate" action="/Forget">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
        <input class="form-control" name="old" type="password" placeholder="Old Password"/>
        <input class="form-control" name="new" type="password" placeholder="New Password"/>
                </div>
            </div>


       
        </div>

<button class="button-10" role="button">Change</button>

   
            
       
    </div>

    
    </form>
</div>    

    