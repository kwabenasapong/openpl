.. title: Workaround for DEP error in Windows
.. slug: 2013/01/25/workaround-dep-error-windows
.. date: 2013-01-25 15:01:22 UTC
.. tags: 
.. description: 

|Windows|

Recently we have had users `report issues with
OpenLP <http://forums.openlp.org/discussion/1906/openlp-1-9-12-crashes-on-my-windows-vista-laptop/p1>`__
running on certain installs of Windows with an error about DEP. This
seems to be mostly on Windows Vista but could possibly be an issue with
more recent versions of Windows. DEP stands for Data Execution
Prevention. In short this is to prevent malicious programs from using
memory in a way that it shouldn't. That is a really poor description,
but the `folks at Wikipedia have a detailed
description <http://en.wikipedia.org/wiki/Data_Execution_Prevention>`__.
You can `find out more from Microsoft
too <http://windows.microsoft.com/en-US/windows-vista/Data-Execution-Prevention-frequently-asked-questions>`__.

When a program you know you can trust experiences an issue with DEP you
should be able to `disable DEP for that
program <http://windows.microsoft.com/en-US/windows-vista/Change-Data-Execution-Prevention-settings>`__.
There is an issue, however, chances are if you try this method OpenLP
will not be listed (manually selecting the exe will also not work from
my experience). This will make it impossible to disable DEP for OpenLP
and to use OpenLP. This leaves us at Plan B, disabling DEP system wide.
From my reading this doesn't apear to put you at a terribly greater
security risk if you have good safe computing practices. Using system
restore (creating a restore point), backing up your system, contacting
your systems administrator, and all other warnings are in play here
since this will in theory weaken your computer's security.

Now you are aware what this does, here is how to disable DEP and get
OpenLP running.

First, you need to open an elevated command prompt or administrative
command prompt. If you are unsure how to do that, Vista x64 has a great
`guide on how to do
it <http://www.vistax64.com/tutorials/181765-elevated-command-prompt.html>`__.

Next enter this command into the elevated command prompt:

**bcdedit.exe /set {current} nx AlwaysOff**

You should get a message back letting you know the changes have been
made successfully.

Close the command prompt and all running applications then reboot your
machine. 

OpenLP should now start and run for you. If you want to enable DEP later
open an elevated command prompt and enter:

**bcdedit.exe /set {current} nx OptIn**

Reboot and DEP is now enabled again.

These instructions were taken from `instructions on the Vista x64
site <http://www.vistax64.com/tutorials/120778-dep-enable-disable.html>`__
I suggest you give it a look also.

This may not be the best way to do this as we don't seem to have any
real DEP/Windows experts here so if you have a better way let us know in
the comments below and if it checks out we will update the blog entry.

.. |Windows| image:: http://openlp.org/files/u1284/Windows-8-logo-300x300.jpg
