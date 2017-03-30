<?php 

	return array(

		'driver'           => 'smtp', 
		'host'             => 'smtp.gmail.com', 
		'port'             => 587,
		'from'             => array('address' => 'tunggal.jaka@gmail.com', 'name' => 'Dios'),
		'encryption'       => 'tls',
		'username'         => 'tunggal.jaka@gmail.com',
		'password'         => 'karang33',
		'sendmail'         => '/usr/sbin/sendmail -bs',
  		'pretend'          => false,

	)

 ?>