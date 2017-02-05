.. title: A Few More Bugs Fixed: OpenLP 2.4.5
.. slug: 2017/02/05/a-few-more-bugs-fixed-openlp-245
.. date: 2017-02-05 14:00:00 UTC
.. tags: 
.. category: 
.. link: 
.. description: 
.. type: text
.. previewimage: /cover-images/a-few-more-bugs-fixed-openlp-245.jpg

We're happy to announce another bugfix release of OpenLP 2.4, version 2.4.5.

Bugs we've fixed in OpenLP 2.4.5
--------------------------------

* `#1645867`_: Spinners in Theme Wizard segfault on OS X
* `#1655988`_: Formatting tags gets included in searchable lyric text
* `#1652851`_: VideoPsalm import fails due to unexpected format
* `#1660473`_: OSZL is ignored on save (inconsistent gui)
* `#1661416`_: Initial "extract song usage data" produces a traceback
* `#1487788`_: Importing photos does not give focus to OpenLP
* `#1512040`_: Loop tooltip gets stuck to "Stop playing..."
* `#1530597`_: Importing Songbeamer songs using latin1 encoding doesn't get decoded correctly
* `#1532193`_: Typos in songusageplugin.py
* `#1605009`_: Web remote does not work with newer versions of jQuery
* `#1624661`_: Missing DB in unmounted disk results in Traceback
* `#1655985`_: EasySlide importer gets the verse order wrong

Known Issues
------------

Users on platforms that use Python 3.6, might experience tracebacks on exit. This will only affect developers and Linux
users on bleeding edge distributions like ArchLinux. These tracebacks can safely be ignored, they should not negatively
affect your use of OpenLP. If you do experience problems, please visit the forums or e-mail the support team.


    But I will sing of your strength;
    
    I will sing aloud of your steadfast love in the morning.
    
    For you have been to me a fortress
    
    and a refuge in the day of my distress.
        
    Psalm 59:16 ESV

[ Image Credit: `Sabino Canyon by Ken Bosma`_ ]

.. _#1645867: https://bugs.launchpad.net/openlp/+bug/1645867
.. _#1655988: https://bugs.launchpad.net/openlp/+bug/1655988
.. _#1652851: https://bugs.launchpad.net/openlp/+bug/1652851
.. _#1660473: https://bugs.launchpad.net/openlp/+bug/1660473
.. _#1661416: https://bugs.launchpad.net/openlp/+bug/1661416
.. _#1487788: https://bugs.launchpad.net/openlp/+bug/1487788
.. _#1512040: https://bugs.launchpad.net/openlp/+bug/1512040
.. _#1530597: https://bugs.launchpad.net/openlp/+bug/1530597
.. _#1532193: https://bugs.launchpad.net/openlp/+bug/1532193
.. _#1605009: https://bugs.launchpad.net/openlp/+bug/1605009
.. _#1624661: https://bugs.launchpad.net/openlp/+bug/1624661
.. _#1655985: https://bugs.launchpad.net/openlp/+bug/1655985
.. _Sabino Canyon by Ken Bosma: https://www.flickr.com/photos/kretyen/2744242674/
