<?php

require_once(dirname(dirname(dirname(dirname(__DIR__)))) . "/vendor/autoload.php");

try {
	// sanitize the inputes from the form: name, email, subject, and message
// this assumes jQuery will be submitting the form, so we're using the $_POST superglobal
	$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	// create swift message
	$swiftMessage = Swift_Message::newInstance();

	// attach the sender to the message
	// this takes the form of an associative array where the email is the key for hte real name
	$swiftMessage->setFrom([$email => $name]);

	/**
	 * attach the recipients to the message
	 * notice this is an array that can include or omit the recipient's real name
	 * use the recipients' real name where Possible: this reduces the probability of the Email being marked as Spam
	 **/
	$recipients = ["elliotmurrey@gmail.com" => "Elliot Murrey"];

	// attach the subject line to the message
	$swiftMessage->setSubject($subject);

	/**
	 * attach the actual message to the message
	 * here, we set two versions of the message: the HTML formatted message and a special filter_var()ed
	 * version of the message that generate a plan text verstion of HTML conten
	 * notice one tatic used is to display the entire $confirmLink to plain text; this lets users who aren't viewing HTML content in Emails still access your links
	 **/
	$swiftMessage->setBody($message, "text/html");
	$swiftMessage->addPart(html_entity_decode($message), "text/plain");

	/**
	 * 
	 **/
}