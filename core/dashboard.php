<?php 

    $title="Accounts"; 

    $description="BD Group distributors and export agent dashboard"; 

    include "masterpage.header.php";

    /**

     * @var current logged in user profile details

     */

    $profile = new Profile();

    include "roles.service.php";

    /**
     * @var membership_roles updates membership roles in the database
     */
    $member_roles = new MembershipRoles($profile->email());

    if(isset($_POST['update'])) 
    {
       $member_roles->update(filter_var($_POST['role'], FILTER_SANITIZE_STRING));
    }

?>

 

    <div class="bg-black p-4 text-light">

            <h3>Dashboard</h3>

            <small> <?=$title?> </small>

        </div>



        <div class="container my-4">

            <div class="card">

                <div class="card-header bg-dark text-white"><?=$title?> Dashboard</div>

                <div class="card-body">

                    <p>

                        welcome

                        <span class="text-success">

                            <?=$profile->firstname();?> 

                        </span>

                        to your personal account.

                    </p>

                    <form action="" method="post">

                    <button type="submit" name="signout" class="btn btn-sm btn-danger">Logout</a>

                    </form>

                   

                </div>

            </div>

        </div>

        <div class="container my-4">
            <div class="card">
            <div class="card-header bg-info text-white">Membership roles</div>
            <div class="card-body">
            <?php foreach($member_roles->get_role() as $role):?> 
                <p>
                    <B>Your current active role:</B>
                <input type="text" readonly value="<?=$role['membership']?>" class='form-control'>
           
                </p>
          <?php endforeach ?>

            <div class="my-2">
                <form action="" method="post">
                    <p>
                    <select name="role" id="update" class="form-control">
                        <option>Woman - Actor</option>
                        <option>Woman - Character</option>
                        <option>Man - Actor</option>
                        <option>Man - Character</option>
                        <option>Kids - Actor</option>
                        <option>Kids - Character</option>
                        <option>Models</option>
                        <option>Voice</option>

                    </select>
                    </p>
                    <p>
                        <input type="submit" name="update" value="Update" class="btn btn-success btn-sm">
                    </p>
                    
                </form>
            </div>
            </div>
            </div>
        </div>
        

        <user-actions></user-actions>



        

        <script type="text/javascript">

            /**

             * defines custom element for auditions

             */

            customElements.define("auditions-request", class extends HTMLElement {

                constructor() { 

                    super();

                }

                connectedCallback(){

                    this.update();

                }

                update() { 

                    this.innerHTML = `

                    <li class="nav-item">

                           <a href="https://tawk.to/chat/628d94f1b0d10b6f3e73e30a/1g3sgrl60" target="_blank"  id="auditions" class="nav-link">Request auditions</a>

                       </li>

                    `;

                }

            })

            /**

             * defines custom element for feedback

             */

            customElements.define("request-feedback", class extends HTMLElement {

                constructor() {

                    super();

                }

                connectedCallback() { 

                    this.update()

                }

                update() { 

                   this.innerHTML = `

                   <li class="nav-item">

                           <a href="https://tawk.to/chat/628d94f1b0d10b6f3e73e30a/1g3sgrl60" target="_blank"  id="feedback" class="nav-link">Episode feedback</a>

                    </li>

                   `

                }

            })

            /**

             * defines custom element for episodes

             */

            customElements.define("request-episodes", class extends HTMLElement {

                constructor(){

                    super()

                }

                connectedCallback() { 

                    this.update()

                }

                update() { 

                   this.innerHTML = `

                   <li class="nav-item">

                           <a href="https://tawk.to/chat/628d94f1b0d10b6f3e73e30a/1g3sgrl60" target="_blank" id="episodes" class="nav-link">Request episodes meta data</a>

                       </li>

                   `

                }

            })

             /**

             * defines custom element for episodes

             */

            customElements.define("user-actions", class extends HTMLElement {

                constructor(){

                    super()

                }

                connectedCallback() { 

                    this.update();

                }

                update() { 

                   this.innerHTML = `

                   <div class="container my-4">

                    <div class="card">

                        <div class="card-header bg-dark text-white"><?=$title?> Actions</div>

                        <div class="card-body">

                        <ul class="navlist">

                            <auditions-request></auditions-request>

                            <request-feedback></request-feedback>

                            <request-episodes></request-episodes>

                        </ul>

                        </div>

                    </div>

                </div>

                   `

                }

            })

        </script>



        <div class="container my-4">

            <div class="card">

                <div class="card-header bg-dark text-white"><?=$title?> History</div>

                <div class="card-body">

                    

                </div>

            </div>

        </div>



       



        <div class="container my-4">

            <div class="card">

                <div class="card-header bg-dark text-white">Account Details</div>

                <div class="card-body">

                    <p>

                        <small>firstname</small>

                    <input type="text" value="<?=$profile->firstname()?>" id="name" readonly class="form-control">

                    </p>

                    <p>

                        <small>lastname</small>

                    <input type="text" value="<?=$profile->lastname()?>" id="surname" readonly class="form-control">

                    </p>

                    <p>

                        <small>email</small>

                    <input type="text" value="<?=$profile->email()?>" id="email" readonly class="form-control">

                    </p>

                    <p>

                        <small>phone</small>

                    <input type="text" value="<?=$profile->phone()?>" id="phone" readonly class="form-control">

                    </p>

                    <p>

                        <small>api secret key</small>

                    <input type="text" value="<?=$profile->api()?>" id="api" readonly class="form-control">

                    </p>

                    <p>

                        <small>opened date</small>

                    <input type="text" value="<?=$profile->created()?>" id="api" readonly class="form-control">

                    </p>

                </div>

            </div>

        </div>

     
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/628d94f1b0d10b6f3e73e30a/1g3sgrl60';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<?php include "masterpage.footer.php"; ?>