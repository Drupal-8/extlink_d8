
The External Links module is a very simple approach to adding icons to links
to external websites or e-mail addresses. It is a purely JavaScript
implementation, so the icons are only shown to users that have JavaScript
enabled.

External Links was written by Nathan Haug.
Built by Robots: http://www.lullabot.com

Ported to Drupal 8 by Jeff Markel (http://drupal.org/user/15171)

Install
-------
Simply install External Links like you would any other module.

1) Copy the extlink folder to the modules folder in your installation.

2) Enable the module using Extend (/admin/modules).

3) No additional configuration is necessary though you may fine-tune settings at
   Administer -> Site configuration -> External Links (/admin/config/user-interface/extlink).

A note about the CSS
--------------------
This module adds a CSS file that is only a few lines in length. You may choose
to move this CSS to your theme to avoid the need to load it separately.
To do this:

1) On the module settings page at Configuration -> External Links
   (/admin/config/user-interface/extlink), check the checkbox labeled
   "Bypass the module's built-in css" and then click the
   "Save configuration" button.
2) Open the extlink.css file within the extlink directory and copy all the code
   from the file into your theme's style.css file.
3) Copy the extlink.png and mailto.png files to your theme's directory.

Note that you DO NOT need to make a extlink.css file. Checking the
configuration's "Bypass the module's built-in css" box is enough to tell Drupal
not to load the original file.
