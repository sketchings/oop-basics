## Introduction To Object-Oriented Programming With PHP

Object-oriented programming is a frightening concept for some programmers due to its syntax complexity and unfamiliar concepts. We will learn the concepts of Object-oriented programming (OOP), which is a style of coding in which related actions are grouped into classes. It aids in creating compact, reusable, and more effective code.

## Understanding Object-Oriented Programming

Object-oriented programming allows the developers to group similar tasks into classes. This makes the code easier to maintain and it follows the tenet - “Do not repeat yourself” (DRY).

One of the major benefits of DRY programming re-usability of code; if information changes in a program, only one module needs to be updated. Maintaining the code where same data is declared at multiple places is extremely challenging task. Making changes to the program becomes a long and frustrating task.

OOP introduces new syntax which appears to be more complex than simple procedural, or inline code. However, upon closer inspection, OOP is actually a very straight-forward and simple approach to programming.

## Why PHP?

Besides the fact that it is a programming language of my choice, there are two reasons to start with PHP.

# 1. PHP is widely used

PHP is one of the most widely used server-side programming language (see this article, for example). It is very popular in the open source world, where applications like WordPress and Drupal live. PHP itself is an open source which means that your PHP skills will benefit different people (including you!).

# 2 PHP is (relatively) easy to learn

Make no mistake: programming is challenging. For most people, anyway. People do not have trouble with the programming languages, but the way of thinking about the program design. It needs to be understood that it comes with practicing over the years. 

Some languages are easier to learn than others. For example, Java is one of the difficult languages to learn. Its complex structure, numerous libraries, and over-whelming functionality makes it hard for the beginners. Two of the easiest languages to learn are JavaScript and PHP due to their powerful and concise semantics. A few lines of code in JavaScript or PHP can do useful things. You can start writing practical programs quickly, without having to spend a lot of time with their pre-requisits.

# What you will need to get started with PHP:

1. A computer
2. A way to render PHP files.

If you do not have anything yet, there are 2 options. 

**Option 1**
If you have a reliable internet, one of the easiest ways is with Cloud9. 

**Option 2**
If you actually want to set up a development environment on your machine or you cannot rely on internet .

###Option 1

1. Sign up at Cloud 9: https://c9.io/
2. Create a new workspace
 * Name your workspace
 * Choose PHP as the type of project
 * Press “CREATE”
 * Wait a few minutes for the workspace to be setup
3. Click on the workspace on the left.
4. Choose “START EDITING”, green button on the right.

###Option 2

1. Download and install the latest version of VirtualBox from
https://www.virtualbox.org/wiki/Downloads
2. Download and install the latest version of Vagrant from
http://www.vagrantup.com/downloads.html
3. Download the file to set up your virtual machine here
http://sketchings.com/wp-content/uploads/2015/02/puphpet.zip
we will be using NGINX on Debian with PHP 5.6
4. Extract the .zip file and move the contents (Vagrantfile and puphpet folder) to the desired storage location on your computer. 
5. Using the terminal, or cmd line, cd into your extracted directory and run `vagrant up`. This will initiate the process.
  * Vagrant will download the box file, which can take a few minutes. It will only have to do this once, even if you create separate environments later on.
  * Then, it will hand control over to Puppet which will begin setting up your environment by installing required packages and configuring tools as desired.
  * You will then be able to ssh into your new box with `vagrant ssh`. You can also access any virtual hosts you created by editing your hosts file and creating entries for the Box IP Address and Server Name you provided during configuration (see step 6 below).
  * To shut down the VM, simply run `vagrant halt`. To start it back up run `vagrant up` again. Destroy it with `vagrant destroy`.
6. You will need to open and edit your hosts file with a text editor like notepad, sublime_text, nano, etc. The location of the hosts file varies by operation system.
  * Windows users could look here: c:\windows\system32\drivers\etc\hosts
  * Linux and Mac OSX users could look here: /etc/hosts or /private/etc/hosts.
  * Example Entry: `192.168.56.101 oophp.dev www.oophp.dev`

[Link to slide presentation](http://www.slideshare.net/AlenaHolligan/demystifying-objectoriented-programming-lone-star-php)
