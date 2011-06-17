 <?php include('../library/template/header.php'); ?>
        <section>
            <div id="containter"> <!--start of container -->
                <div id="content"> <!-- start of content div-->
                    <!--Ajax requests-->
                    <div id="divToAppend">

                    </div>

                    <div class="content-holder">
                        <div>Check Ram Speed and Type</div>
                        <div><pre class="sh_sh">$ sudo dmidecode --type 17 | more </pre></div>
                    </div>
                    <div class="content-holder">
              		    <div>Open Terminal with profile name</div>
        		        <div><pre class="sh_sh">$ gnome-terminal --window-with-profile=profilename</pre></div>
                    </div>
    		        <!-- new command goes here -->
    		        
    		        <!-- eof adding new command -->
    	        </div> <!-- eof content -->
	      </div><!-- eof container -->
        </section>
    </body>
</html>
