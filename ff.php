<?php
if (!isset($_SESSION['a']) && !isset($_SESSION['b']) && !isset($_SESSION['admins'])) {
  header('Location: index.php');
  exit;
}
include("connection.php");
?>

<body>
<?php
if(isset($_GET['q1']))
{
$sql123="Select  * from checkerinfo where CheckerID="."'".$_GET['q1']."'";
	$result123=mysqli_query($conn,$sql123) or die(mysqli_error($conn));
$row123=mysqli_fetch_array($result123);
?>
<form  id="message11" name="loginForm" action="#">
  <fieldset class="account-info">
   <legend><h2>Author Details Form Insertion</h2></legend>
    <label>
      Full Name
      <input type="text" name="FullName" placeholder="Miran Hikmat Mohammed" 
      value='<?php echo $row123['CheckerName'];?>' id="FullName">
    </label>
       
    <label>
      Email Address
      <input type="email" name="Email" placeholder="name@domain.com" 
      value='<?php echo $row123['CheckerEmail'];?>' id="Email">
    </label>
    
    <label>
      Mobile Number
      <input type="tel" name="Mobile" placeholder="(+964)-7701547929" 
      value='<?php echo $row123['CheckerMobile'];?>' id="Mobile">
    </label>
    
       <label>
      Password
      <input type=password name="CheckerPassword" placeholder="******"
      value='<?php echo $row123['CheckerPassword'];?>' id="CheckerPassword">
    </label>
	</fieldset>
	
	
  <fieldset class="account-action">
   <button id="updates" class="btn" name="updates" type="submit" value="<?php echo $_GET['q1'];?>">
Update Data</button>
   <input type="reset"  value="Clear All" class="btn" id="clear">
  </fieldset>  
</form>
<script type="text/javascript">
        $(function() {
	
            $("#updates").click(function(e) {
				
				e.preventDefault();
	var id=$("#updates").val();
	var FullName=$("#FullName").val();
    var Email=$("#Email").val();
    var Mobile=$("#Mobile").val();
    var CheckerPassword=$("#CheckerPassword").val();
                    $.ajax({
                        type :"POST",
                        url:"checker_update.php",
						async:false,
						data: ({
                        id:id,
				FullName:FullName,
				Email:Email,
				Mobile:Mobile,
				CheckerPassword:CheckerPassword
                    }),				
                  success : function(data) {
				  displayfromdb();

					  
        }
				
				});	
			
			});
			
		});
			
	
	function displayfromdb(){

		$.ajax({
			url:"checkerinfo11.php",
			type:"POST",
			async:false,
			data:{
			dsplay:1
			},
				success:function(d){
				$('#div1').fadeOut('slow').load('checkerinfo11.php').fadeIn("slow");
        window.location.href = "checkerinfo.php";
			}
			
		});
	}
	
 </script>


  
  <script type="text/javascript">
	$("#submitdata").click(function(e) {
        $.ajax({
            type: "POST",
            url: "checkerinfo.php",
			async:false,
            data: {done1:1},
            success:function(data){
			//$('#t1').fadeOut('slow').load('teacher1.php').fadeIn("slow");	

		}

});
	
	 });

  </script>
 
  <?php
}
	?>
  

</body>
            <script type="text/javascript">
        $(function () {
            $("#table1").hpaging({ "limit": 10 });
        });

        $("#btnApply").click(function () {
            var lmt = $("#pglmt").val();
            $("#table1").hpaging("newLimit", lmt);
        });
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

	
	

