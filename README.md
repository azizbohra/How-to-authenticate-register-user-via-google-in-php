How to authenticate/register user via google in php

You have often seen this option in many websites or mobile application. so why this option is getting popularity & what are the benefits of giving this option to user. In this article i will show you what are the benefits of it & how to authenticate user via google in php.

Nowadays everybody has gmail account. when you register with gmail you have to fill all the details. Now gmail has all the information about you. Google provide us an auth protocol by which we can access user information.  

Nobody want to enter whole information again & again in different websites. The best way is to use google auth protocol by which user can login & give you all his basic information.

It is good for developer & as well as user also. Because user does not want to remember credential for every website he register with, he just want to remember his gmail credentials. so, this is the best way to login or register via google.

To implement this feature in your website you need 4 things:
1. Google Client Library
2. CLIENT_ID
3. CLIENT_SECRET
4. REDIRECT_URI_GOOGLE

You have to generate client id & client secret in google console
You have to configure redirect url in google console

Note: Don't forget to replace client id and client secret in config.php
