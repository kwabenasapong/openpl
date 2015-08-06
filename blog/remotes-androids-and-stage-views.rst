.. title: Remotes, Androids and Stage Views
.. slug: 2011/05/09/remotes-androids-and-stage-views
.. date: 2011-05-09 13:05:19 UTC
.. tags: 
.. description: 

From near the beginning there has been some form of remote control
functionality in OpenLP V2. At first it was just a basic command line
utility. Then we developed the basic Web view which although functional,
wasn't very pretty.

Well in recent weeks remote operation has been getting some more much
needed attention, in the shape of a new design targetting mobiles, an
Android App and a Stage View.

First Raoul worked his designer magic on the Web Interface giving it a
shiny new look which was easy to use on a smartphone. As more and more
people now own an iPhone, Blackberry or Android phone and the number of
Churches with Wi-Fi connections are increasing, this offers much more
flexibility in the operation of OpenLP. If the worship leader decides to
skip a song, with a couple of buttons she can put the correct song on
the screen. The car park attendant or nursery supervisor can easily put
a message on the screen over the network from their phones.

The next person to take advantage of the remote functionality was Samuel
Sjöbergsson who has started writing an Android OpenLP app. With help
from Johan Mynhardt and Tim it is making good progress and it is great
to see two new developers join the team. It is still very early days,
but we're looking forward to the potential of this app. We're not yet
ready to put this in the Android Market, but if you want to take an
early peek at what has been done so far, you can download it from
launchpad.

Finally in the latest nightly builds, you will find the most recent
addition. A Stage View. For those who don't know, this is a specially
designed output for those people on the stage. They don't need all the
whizzy background graphics, they just want a plain view of the current
and perhaps the next verse and an indication of which verse they are on.
A clock helps them to know when to stop, and perhaps some notes to act
as a reminder.

We've had a few feature requests for this, but because of the complexity
of adding support for a third monitor, and the relatively few users who
have three video outputs, we've not considered it high priority. Then
came the realisation that this could be easily achieved with the remote
API, and I set about writing a simple page to prove the concept. So not
only can this then be opened in a full screen web browser on your third
monitor (if you are lucky enough to have one), but you can save the
expense of lots of video cabling and instead open it on another Laptop
or Tablet on the network.

To use the remote functionality, first go into Settings -> Plugin List,
and Activate the Remote plugin. To view the web address, go to Settings
-> Configure OpenLP, choose the Remote page and the hyperlinks should be
displayed.

We would love to know if you make use of any of these remote options,
and also tell us your ideas on how we could improve them or of any
limitations that might be stopping you from using them.
