# Shoutbox created with PHP, MySQL, jQuery, AJAX, HTML and CSS
This repository contains a responsive Shoutbox built using jQuery, AJAX, PHP and MySQL. So, when the user sends a name and a message, that information appears at the top of the Shoutbox along with the time the message was sent. Also, this data is entered into the database and with the help of AJAX, it appears instantly on the page, without reloading the page. 

At the same time, this form has validation, and empty data cannot be sent, and with AJAX and jQuery validation plugin, the answer **"Please fill in your name and message!"** appears immediately when the user tries to send empty data. This was done with jQuery validate groups to display one message for all inputs, instead of each input separately. 

PHP uses procedural mode and mysqli api to communicate with the database. In PHP file mysqli is set charset of UTF8 for accept special letters such as čćšđž. Moreover, there are built-in some PHP functions like ucwords which work in case when the user writes his name in lowercase letters, the first letter of the user's first and last name will be capitalized. Also, there is a function ucfirst to capitalize the first letter of a sentence if the user wrote their message in lowercase.

---

To check how it looks, please click preview.
##
[PREVIEW](http://shoutbox.epizy.com/)