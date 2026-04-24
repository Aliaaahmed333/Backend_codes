 
<main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form action ="index.php?page=sign-in" method = "POST">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text"  name = "name"placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Name</label>
                                 </div>
                                   
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" name = "email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                    
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel"  name = "phone" placeholder="Enter your phone number..." data-sb-validations="required" />
                                    <label for="phone">Phone Number</label>
                                   
                                </div>
                                <br>
                                 <div class="form-floating">
                                    <input class="form-control" id="password" type="password" name = "password" placeholder="Enter your password" data-sb-validations="required" />
                                    <label for="phone">Password</label>
                                   
                                </div>
                              <br>
                                <button  type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>



