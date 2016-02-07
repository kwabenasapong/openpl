.. title: OpenLP 2.4 Release Candidate (version 2.3.3)
.. slug: 2016/02/07/openlp-24-release-candidate-version-233
.. date: 2016-02-07 16:00:00 UTC
.. tags:
.. category:
.. link:
.. description:
.. type: text
.. previewimage: /cover-images/openlp-24-release-candidate-version-233.jpg

We're getting closer and closer to a release. Today we're excited to bring you our release candidate of OpenLP 2.4. If
there are no major issues with version 2.3.3, we will release version 2.4 in a week or two.

OpenLP 2.4 is a short release with the main goal being upgrading OpenLP to use Qt 5. Up until now, we've been using
version 4 of the GUI toolkit called Qt ("cute"). The GUI toolkit is how we display our interface.

Bugs we've fixed in this release
--------------------------------

* `#1531319`_: Update the presentation display as it isn't updated on Windows when verses change
* `#1404669`_: KDE Plasma 5 is breaking the look of OpenLP for the Media Library
* `#1532169`_: Expanding or Collapsing a Song in ServiceManager raises an Exception
* `#1532938`_: Presenting with PowerPoint or Impress triggers traceback
* `#1533081`_: Importing Song DB fails
* `#1534306`_: Empty song-titles causes tracebacks on update from 2.0 to 2.2
* `#1535332`_: Startup display on second monitor hides items send live
* `#1536411`_: Verse order textbox jumps to end
* `#1533280`_: Songs with linked audio cause traceback
* `#1537212`_: Song book number input box - not clearing and unexpected 'Enter' action
* `#1533246`_: No Shortcuts work in 2.3.2 post 2.3.1 install

Known issues
------------

* On Windows when using transparent themes, the display will not update correctly.

Translations
------------

The latest translations have been included so these are close to being the final version for 2.4. More help is always
needed to improve the scope of our translations.


    I press on toward the goal to win the prize for which God has called me heavenward in Christ Jesus.

    Philippians 3:14

[ Image Credit: `Finish Line by jayneandd`_ ]

.. _#1531319: https://bugs.launchpad.net/openlp/+bug/1531319
.. _#1404669: https://bugs.launchpad.net/openlp/+bug/1404669
.. _#1532169: https://bugs.launchpad.net/openlp/+bug/1532169
.. _#1532938: https://bugs.launchpad.net/openlp/+bug/1532938
.. _#1533081: https://bugs.launchpad.net/openlp/+bug/1533081
.. _#1534306: https://bugs.launchpad.net/openlp/+bug/1534306
.. _#1535332: https://bugs.launchpad.net/openlp/+bug/1535332
.. _#1536411: https://bugs.launchpad.net/openlp/+bug/1536411
.. _#1533280: https://bugs.launchpad.net/openlp/+bug/1533280
.. _#1537212: https://bugs.launchpad.net/openlp/+bug/1537212
.. _#1533246: https://bugs.launchpad.net/openlp/+bug/1533246
.. _Finish Line by jayneandd: https://www.flickr.com/photos/jayneandd/4450623309/

