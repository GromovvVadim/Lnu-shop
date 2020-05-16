<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
               <h4>Pages</h4>
                <ul>
                    <li><a href="../shop.php">Shop</a></li>
                    <li><a href="../cart.php">Shopping Cart</a></li>
                    <li><a href="../contact.php">Contacts</a></li>
                    <li>
                    <?php
                       if(!isset($_SESSION['customer_email'])){
                           echo"<a href='../checkout.php'>My Account</a>";
                       }else{
                          echo"<a href='account.php?orders'>My Account</a>";
                       }
                       ?>
                    </li>
                </ul>               
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>
            <div class="com-sm-6 col-md-3">
                 <h4>User</h4>
                <ul>
                    <li><
                    <a href="../checkout.php">
                     <?php
                     if(!isset($_SESSION['customer_email'])){
                          echo "<a href='../checkout.php'> Login </a>";
                         }else{
                          echo " <a href='logout.php'> Log Out </a> ";
                         }
                     ?>
                     </a>
                    </li>
                    <li>
                        <?php
                           if(!isset($_SESSION['customer_email'])){
                               echo"<a href='../register.php'> Register </a>";
                           }else{
                              echo"<a href='account.php?edit_acc'> Edit Account </a>";
                           }
                           ?>
                    </li>
                </ul>
                <hr class="hidden-md hidden-lg">
            </div>
            <div class="col-sm-6 col-md-3">
                <h4>Find Us</h4>
                <p>
                    <a>LNU Shop</a>
                    <br/><a>Universitetska 1</a>
                    <br/><a>LNU@gmail.com</a>
                    <br/><a>+298 485 254</a>
                </p>
                <hr class="hidden-md hidden-lg">   
            </div>
            <div class="col-sm-6 col-md-3">  
                <h4>Keep In Touch</h4>
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a> 
                    <a href="#" class="fa fa-google-plus"></a> 
                </p>
            </div>
        </div>
    </div>
</div>
<div id="copyright">
    <div class="container">
        <div class="footer-copyright text-center py-3 mdb-color indigo lighten-3 ">© 2020 Copyright:
            <a href="https://hestagentur.no/wp-content/uploads/2018/10/Thomas_Ekstro%CC%88m_Scandinavian_Traveler_05.jpg">LNU Shop</a>
        </div>
    </div>
</div> 