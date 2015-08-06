==============
OpenLP Website
==============

This repository holds the OpenLP website, so that anyone can contribute to the site.

The website is built using Nikola, the static site generator. It uses Disqus for comments, which has superior
spam detection and moderation tools. The instructions below show you how to get set up on your local machine.

Installing Nikola
-----------------
The OpenLP site is built on **Nikola** 7.6.x. This means you'll probably need to install it in a virtual environment.
Not to worry, this is pretty simple.

First up, install the ``python-virtualenv`` package::

    $ sudo apt-get install python-virtualenv

Now create a virtual environment somewhere. I usually put it in the same directory as my Bazaar repositories::

    $ virtualenv venv

Once that has been created, you can install Nikola with ``pip``::

    $ cd venv/bin
    $ ./pip install --upgrade nikola

*Note: I'm using ``--upgrade`` to make sure that I install the latest version of Nikola, so that even if I have a version of Nikola installed, I'll have the latest and greatest here.*

I like to symlink the ``nikola`` binary into the project directory I'm working in, for ease of use::

    $ cd ~/projects/openlp/website
    $ ln -s ~/venv/bin/nikola nikola

Now you're ready to start working on the web site. Next step is to build the site::

    $ nikola build

That will run through a whole bunch of stuff and build the site for you. To run the site, simply use the ``serve``
command::

    $ nikola serve

This will start a local Python web server and tell you where to go in your browser in order to preview the site.

Once you're this far, you'll be ready to start contributing toward the we site. Have fun!
