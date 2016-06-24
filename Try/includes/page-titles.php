<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php 	
/* INDEX */		if ($page == 'index.php') {print 'Home';}		

/* ABOUT */		if ($page == 'about.php') {print 'About Us';}		

						if ($page == 'board.php') {print 'About Our Board';}		
						if ($page == 'staff.php') {print 'About Our Staff';}
						if ($page == 'clients.php') {print 'About Our Clients';}		
				
/* SERVICES */		if ($page == 'services.php') {print 'Services';}	

/* VOLUNTEER */		if ($page == 'volunteer.php') {print 'Volunteer';}				

/* DONATE */	if ($page == 'donate.php') {print 'Donate';}				

/* CONTACT */	if ($page == 'contact.php') {print 'Contact';}	

/* THANKS */	if ($page == 'thanks.php') {print 'Thanks';}	
?>