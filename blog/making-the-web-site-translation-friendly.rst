.. title: Making the Web Site Translation Friendly
.. slug: 2017/11/19/making-the-web-site-translation-friendly
.. date: 2017-11-19 12:00:00 UTC
.. type: text
.. previewimage: https://openlp.org/cover-images/making-the-web-site-translation-friendly.jpg

Over the years, we have tried to have a multi-lingual website. Unfortunately each time has ended up with the same
scenario:

1. User gets excited
2. User joins the translation team
3. User translates 50% to 80% of the website
4. User forgets about translation
5. Translation is no longer maintained, and we get requests to fix a language we don't speak

If you've ever wondered why our manual is only in English, this is why.

Earlier this year, however, after some more requests by users to be able to translate the website, we looked at a new
feature from online translation site `Transifex.com`_ called *Live Translation*. Essentially this allows you to
translate your website without the need for much maintenance. So we decided to silently roll out a beta phase of a
translatable website.

We're quite pleased with the result so far. We've had a number of people translate the website, and most of those
translations have stuck to 100% completion. We also don't publish a translation until it is 100% complete. This helps
us to keep a website that looks great no matter which language it is being displayed in.

Along the way, however, there have been a couple of hitches. One of them is that there was a lot of HTML in the strings
that needed to be translated. We have gone through the website and tried to address this as much as possible. There
are still some HTML tags here and there, but more complicated stuff like links and icons have been removed, which
should make translating the site much easier.

Unfortunately this does have the side effect that a lot of the strings that were already translated will now have to be
translated again, but we trust you will bear with us while those folks who have volunteered to translate the site bring
it back up to 100% translated.

Would you like to be involved in this project? Just sign up on `Transifex.com`_, and join the `website project`_.

*As a side note, the blog has been puposefully kept untranslated.*

[ Image Credit: `Whisky Zulu by Dennis van Zuijlekom`_ ]

.. _Transifex.com: https://www.transifex.com/
.. _website project: https://www.transifex.com/openlp/openlp-website/
.. _Whisky Zulu by Dennis van Zuijlekom: https://www.flickr.com/photos/dvanzuijlekom/11438391234/
