#Introduction To Object-Oriented Programming With PHP

For many programmers, object-oriented programming is a frightening concept, full of complicated syntax and other roadblocks. We’ll be learning the concepts behind object-oriented programming (OOP), a style of coding in which related actions are grouped into classes to aid in creating more-compact, effective code.

##Understanding Object-Oriented Programming

Object-oriented programming is a style of coding that allows developers to group similar tasks into classes. This helps keep code following the tenet “don’t repeat yourself” (DRY)and easy-to-maintain.

“Object-oriented programming is a style of coding that allows developers to group similar tasks into classes.”

One of the major benefits of DRY programming is that, if a piece of information changes in your program, usually only one change is required to update the code. One of the biggest nightmares for developers is maintaining code where data is declared over and over again, meaning any changes to the program become an infinitely more frustrating game of Where’s Waldo? as they hunt for duplicated data and functionality.

OOP is intimidating to a lot of developers because it introduces new syntax and, at a glance, appears to be far more complex than simple procedural, or inline, code. However, upon closer inspection, OOP is actually a very straightforward and ultimately simpler approach to programming

##Why PHP?

Besides the fact that it is my programming language of choice, there are two reasons to start with PHP.

###PHP is widely used

PHP is likely the most widely used server-side programming language (see this article, for example). It’s used on millions of servers world wide.

PHP is very popular in the open source world, where applications like WordPress and Drupal live. One reason is that PHP is itself open source.

This means that your PHP skills will have value to many different people (including you!).

###PHP is (relatively) easy to learn

Make no mistake: programming is hard. For most people, anyway.

What people have trouble with is not the programming languages, but the way of thinking about program design. This only comes with practice, practice, and more practice.

But still, some languages are easier to learn than others. Java is one of the more difficult. It’s a good language, but it’s very structured, and hard for beginners to get started with.

Two of the easiest languages to learn are JavaScript and PHP. Even a few lines of JavaScript and PHP can do useful things. You can start writing programs quickly, without having to learn of lot of stuff first.

##What you will need:

1. A computer
2. A way to render PHP files.

If you don’t have a anything yet, never fear, you have 2 options. If you have a reliable internet, one of the easiest ways is with Cloud9, so choose **Option 1**. If you actually want to set up a dev environment on your machine or you can’t rely on internet, choose **Option 2**.

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
4. Extract the .zip file and move the contents (Vagrantfile and puphpet folder) to the location on your computer where you would like to store this project.
5. Using the terminal, or cmd line, cd into your extracted directory and run `vagrant up`. This will kick-off the initial process.
  * Vagrant will download the box file, which can take a few minutes. It will only have to do this once, even if you create separate environments later on.
  * Then, it will hand control over to Puppet which will begin setting up your environment by installing required packages and configuring tools as desired.
  * You will then be able to ssh into your new box with `vagrant ssh`. You can also access any virtual hosts you created by editing your hosts file and creating entries for the Box IP Address and Server Name you provided during configuration (see step 6 below).
  * To shut down the VM, simply run `vagrant halt`. To start it back up run `vagrant up` again. Destroy it with `vagrant destroy`.
6. You will need to open and edit your hosts file with a text editor like notepad, sublime_text, nano, etc. The location of the hosts file varies by operation system.
  * Windows users could look here: c:\windows\system32\drivers\etc\hosts
  * Linux and Mac OSX users could look here: /etc/hosts or /private/etc/hosts.
  * Example Entry: `192.168.56.101 oophp.dev www.oophp.dev`

[Link to google slide presentation](https://docs.google.com/presentation/d/1DLupJE6xLZmedPFVFJTcEckGHnSrUclql2xomKKmNFk/edit?usp=sharing)
