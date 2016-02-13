.. title: OpenLP 2.4 Released
.. slug: 2016/02/14/openlp-24-released
.. date: 2016-02-14 16:00:00 UTC
.. tags:
.. category:
.. link:
.. description:
.. type: text
.. previewimage: /cover-images/openlp-24-released.jpg

After an extremely short release cycle, we're proud to present OpenLP 2.4.

Some folks might be wondering why we're releasing a new version after such a short amount of time. Others might be
looking at the new features, and wondering why there's almost nothing there. The reality is that we were forced to
upgrade some of the libraries we use sooner than we had anticipated.

Some of the Linux distributions removed one of the components of the |GUI| library we are using (Qt), and in order to
continue using that component we had to upgrade the |GUI| library. When the component was removed from those Linux
distributions, OpenLP was also removed. So in order to make sure OpenLP is in the next version of Ubuntu, we had to
move fast.

Known issues
------------
Because we had to move fast it also meant that some of the issues we discovered while upgrading to the latest Qt
version could not be solved within the limited timeframe. These issues are only seen on Windows and Mac OS X and relate
to the use of transparent themes, and cause the presentation display not to update correctly. We have  also spotted
some issues with the webkit player, which is used for live backgrounds, and again this is only seen on Windows and Mac
OS X. So if you need these features, we recommand skipping OpenLP 2.4 and waiting for OpenLP 2.6.

Bugs we've fixed in OpenLP 2.4
------------------------------

* `#1544263`_: Tools -> Song Usage Tracking -> Toggle Tracking doesn't work
* `#1531319`_: The presentation display isn't updated on windows
* `#1404669`_: KDE Plasma 5 is breaking the look of OpenLP
* `#1532169`_: Expanding or Collapsing a Song in ServiceManager raises an Exception
* `#1532938`_: Presenting with PowerPoint or Impress triggers traceback
* `#1533081`_: Importing Song DB fails
* `#1534306`_: Empty song-titles causes tracebacks on update from 2.0 to 2.2
* `#1535332`_: Startup display on second monitor hides items send live
* `#1536411`_: Verse order textbox jumps to end
* `#1490508`_: Powerpoint / object has no attribute 'slidenumber'
* `#1533280`_: Songs with linked audio cause traceback
* `#1537212`_: Song book number input box - not clearing and unexpected 'Enter' action
* `#1066323`_: Add song to multiple song books
* `#1533246`_: No Shortcuts work in 2.3.2
* `#1490184`_: '?' help buttons not working
* `#1510572`_: Double verses at end of song shows as 1 on stageview
* `#1531872`_: Fix projector test temp db file
* `#1530340`_: Ctrl-F should select all text in the search field
* `#1530354`_: Allow entering verse order in lowercase
* `#1420276`_: Remove old upgrade code
* `#1507385`_: VLC not available after upgrade to 2.2
* `#913508`_: cannot delete a theme if it is assigned to a song
* `#1516171`_: Alert with line break from remote makes desktop report a bug
* `#1168778`_: Search as you type setting in wrong settings tab
* `#1281100`_: Unable to distinguish between songs with the same title
* `#1413217`_: optparse deprecated
* `#1439304`_: Print service change font size
* `#1487014`_: Image disappearing from images list
* `#1390699`_: Better wording for "Plugin List"
* `#1390706`_: Improve File menu

New features we've added in OpenLP 2.4
--------------------------------------

* `#1509550`_: Support song import from VideoPsalm
* `#1512674`_: Customise styles for remote interface

All over the world
------------------

With every release, we hear of more and more people from all over the world who are using OpenLP in their churches. We
love hearing from you, so please drop us a line (`Facebook`_, `Twitter`_, `Google+`_, |e-mail|, or just comment below)
and tell us where you're from and how OpenLP is helping your church worship the Lord better.


    But I say, Have they not heard? Yes verily, their sound went into all the earth, and their words unto the ends of the world.

    Romans 10:18 KJV

[ Image Credit: `The world by Dave C`_ ]

.. |GUI| raw:: html

   <abbr title="Graphical User Interface">GUI</abbr>

.. |e-mail| raw:: html

   <abbr title="support (at) openlp.org">e-mail</abbr>

.. _#1544263: https://bugs.launchpad.net/openlp/+bug/1544263
.. _#1531319: https://bugs.launchpad.net/openlp/+bug/1531319
.. _#1404669: https://bugs.launchpad.net/openlp/+bug/1404669
.. _#1532169: https://bugs.launchpad.net/openlp/+bug/1532169
.. _#1532938: https://bugs.launchpad.net/openlp/+bug/1532938
.. _#1533081: https://bugs.launchpad.net/openlp/+bug/1533081
.. _#1534306: https://bugs.launchpad.net/openlp/+bug/1534306
.. _#1535332: https://bugs.launchpad.net/openlp/+bug/1535332
.. _#1536411: https://bugs.launchpad.net/openlp/+bug/1536411
.. _#1490508: https://bugs.launchpad.net/openlp/+bug/1490508
.. _#1533280: https://bugs.launchpad.net/openlp/+bug/1533280
.. _#1537212: https://bugs.launchpad.net/openlp/+bug/1537212
.. _#1066323: https://bugs.launchpad.net/openlp/+bug/1066323
.. _#1533246: https://bugs.launchpad.net/openlp/+bug/1533246
.. _#1490184: https://bugs.launchpad.net/openlp/+bug/1490184
.. _#1510572: https://bugs.launchpad.net/openlp/+bug/1510572
.. _#1531872: https://bugs.launchpad.net/openlp/+bug/1531872
.. _#1530340: https://bugs.launchpad.net/openlp/+bug/1530340
.. _#1530354: https://bugs.launchpad.net/openlp/+bug/1530354
.. _#1420276: https://bugs.launchpad.net/openlp/+bug/1420276
.. _#1507385: https://bugs.launchpad.net/openlp/+bug/1507385
.. _#913508: https://bugs.launchpad.net/openlp/+bug/913508
.. _#1512674: https://bugs.launchpad.net/openlp/+bug/1512674
.. _#1516171: https://bugs.launchpad.net/openlp/+bug/1516171
.. _#1168778: https://bugs.launchpad.net/openlp/+bug/1168778
.. _#1281100: https://bugs.launchpad.net/openlp/+bug/1281100
.. _#1413217: https://bugs.launchpad.net/openlp/+bug/1413217
.. _#1439304: https://bugs.launchpad.net/openlp/+bug/1439304
.. _#1487014: https://bugs.launchpad.net/openlp/+bug/1487014
.. _#1390699: https://bugs.launchpad.net/openlp/+bug/1390699
.. _#1390706: https://bugs.launchpad.net/openlp/+bug/1390706
.. _#1509550: https://bugs.launchpad.net/openlp/+bug/1509550
.. _Facebook: https://www.facebook.com/openlp/
.. _Twitter: https://www.twitter.com/openlp
.. _Google+: https://plus.google.com/u/0/117120749304988900189
.. _e-mail: support@openlp.org
.. _The world by Dave C: https://www.flickr.com/photos/normalityrelief/3498992672/

