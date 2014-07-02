# PHP job application test
<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">php-hire-test</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="https://github.com/humantech/php-hire-test" property="cc:attributionName" rel="cc:attributionURL">Humantech</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.

Ahoy there, mate! This is capt. Richard (aka. [@vltr](https://github.com/vltr), head of [@humantech](https://github.com/orgs/humantech/members) development team) writing about this simple idea of ours: write a hiring application test based on well known technologies, such as git ... and some other things.

## Of what does this test consists?
First and uniquely, it's all about a different kind of job application for [our company](http://www.humantech.com.br/), mainly because **we are currently hiring**!! :) Another motivation is to go to the source of your habilities, _literally_.

## The job itself
Our open spot is for **web development**, mainly PHP 5.3+ for backend and JavaScript / CSS / HTML for the client-side. Looks like a piece of cake at first (if you're the one), but it can be tricky (and satisfying) at the same time!

### Why is it written in english?
Because **english is a must nowadays for software development**. You may find specs and material in our native language (brazilian portuguese), but don't expect to find a translated version of functions and variables of the source code of your preferred tool or framework. This is highly unlikely ... Seriously.

# Goal
Create a contact form based on the Adobe Photoshop _contact.psd_ file available in this repository, using it to guide how it shoud look. If you don't have access to Adobe Photoshop, you can simply use GIMP (like I did) or any other software and take advantage of some "clues" of the file I left in the _contacts-assets_ directory. You should use the following frameworks and resources:

* Bootstrap 3.1+ - LESS/CSS Framework
* jQuery 1.10+ - JavaScript framework
* Slim Framework - PHP 5.3+
 * If you choose another PHP framework, you'll better have a good reason for it ;)
  * And do not use Wordpress. Use plain PHP if you wish, but not Wordpress
* MySQL 5.x+

## Preview
**Be aware!** The watermark is not important! :P

![alt text](https://github.com/humantech/php-hire-test/raw/master/contacts-assets/contacts_preview_small.png "Contacts preview")

## Requirements
* Use LESS CSS pre-processor to create user styles;
* Validate user input in the frontend (with friendly messages) and also in the backend (security is important for us, the reason not shareable by the moment);
* The form data must be sent using the POST HTTP method, refreshless (by using AJAX) and in the JSON format;
* Integrate the Google Maps API (for visual purpose) in any coordinate you want. You just have to be sure that it points to a city, not the middle of nowhere (or Area 51);
* Make usage of PDO abstraction layer for database transactions;
* Write all contacts to a database and send an e-mail to a parametrized address;
* Make use of a SMTP server to send the e-mail, and not PHP's mail();
* The client-side must be visually and functionally compatible (_pay attention: I'm saying compatible, be sure on what this means_) with MS Internet Explorer 9+, Chrome and Firefox. The technique for this is up to you;

## What can distinguish you from the others
* How you treat code licensing;
* How you deal with encodings and charsets;
* How you'll handle the build process (if any);
* How W3C compliant your code will be;
* How fast and speed optimizable the page will shown;
* Are you aware of the latest asset optimization techniques?
* Your overall interest in our company and technologies :)

## How to do the test
1. Fork this repository, of course;
2. Create a branch with your github username, organizing assets, resources and files as you think it should;
3. The contact form **must be called index.php**;
4. When you're done, make a pull request and send us an e-mail to richard (at) humantech (dot) com (dot) br.

# Licensing
This test and assets are created by Humantech Knowledge Management under the [
Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)](http://creativecommons.org/licenses/by-nc-sa/4.0/legalcode) license.

# About Humantech
We use Knowledge Management to evaluate, identify, generate and manage the intellectual assets of organizations. You can learn more about us at our [official homepage](http://www.humantech.com.br/). _Warning: brazilian portuguese only._

## A little bit more about us

[![Gestão do conhecimento - a evolução da sociedade do conhecimento ](http://img.youtube.com/vi/ZNEqk_u3twY/0.jpg)](http://www.youtube.com/watch?v=ZNEqk_u3twY)

_A little bit old, but still good!_ ;)

_And brazilian portuguese only too, sorry._
