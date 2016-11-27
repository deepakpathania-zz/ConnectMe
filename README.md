# ConnectMe
- A portfolio building and searching platform to stay connected with peers.
- Features include : 
```
- Create a profile with relevant information.
- Search for other people's profiles.
- Explore through all available profiles.
- Share your profile with the world.
```

# Quick start
- Clone this repository on your local machine in your server directory.
(say <code>htdocs</code> if you're on windows or <code>/var/www/html</code> on linux.

- Change the <code>_database/database.php</code> file to enter your own credentials.
```php
<?php
    $hostname = "YOUR_HOST_NAME"; //say localhost
    $user = "YOUR_USER_NAME"; //say root
    $password = "YOUR_PASSWORD";
    $database = "userprofile"; //Keep this same for now.
    $database=mysqli_connect($hostname,$user,$password,$database);
?>
```
- Create a database named <code>userprofile</code> in MySQL and import the <code>_sqlfile/user.sql</code> file.
```SQL
create database userprofile;
use userprofile;
source path/to/file.sql;
```
for example : <code>source /var/www/html/ConnectMe/_sqlfile/user.sql </code>

- You're good to go. Go to <code>localhost/ConnectMe</code> to see it inaction.

# Screenshots
- Landing and registration page.

![selection_019](https://cloud.githubusercontent.com/assets/15071438/20595188/fefb84d2-b25e-11e6-88d1-cf4e98b5c15b.png)

- Basic avatar creation.

![selection_020](https://cloud.githubusercontent.com/assets/15071438/20595190/fefddb7e-b25e-11e6-8b2f-83c803ff0c2e.png)

- Personal details

![selection_021](https://cloud.githubusercontent.com/assets/15071438/20595189/fefcaf7e-b25e-11e6-9c4f-2cf59bd63137.png)

- Education details

![selection_025](https://cloud.githubusercontent.com/assets/15071438/20646881/edf9ca06-b4aa-11e6-90cc-c7ad9cac56fd.png)

- Achievement details

![selection_026](https://cloud.githubusercontent.com/assets/15071438/20646882/edfdbab2-b4aa-11e6-83b2-4e6475a6936f.png)

- Edit profile information

![selection_027](https://cloud.githubusercontent.com/assets/15071438/20646883/ee027228-b4aa-11e6-9f82-6004a23e1afc.png)

- Post login home page

![selection_023](https://cloud.githubusercontent.com/assets/15071438/20595192/ff095f12-b25e-11e6-92af-f712631200c2.png)

- Profile page to be shared.

![selection_028](https://cloud.githubusercontent.com/assets/15071438/20646884/ee08c34e-b4aa-11e6-959f-09ce51d28712.png)

![selection_029](https://cloud.githubusercontent.com/assets/15071438/20646886/ee0d0e36-b4aa-11e6-904d-7ea60cc02f6c.png)





