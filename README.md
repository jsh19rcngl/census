# census

# Config
sa application/config
open nyo sa editor ung config.php

tpos lahat ng `Projects/a-v2` palitan nyo ng folder name nyo
# 
itong clone nyo nakalagay sa `htdocs/census` yung census ang foldername ng clone nyo
palitan nyo yung nasa config na `Projects/a-v2` -> `census` .
# ex.
# from
    `define('FOLDER_PATH', '/Projects/a-v2/');
    define('VIEW_PATH', '/Projects/a-v2/application/View/');
    define('CONTROLLER_PATH', '/Projects/a-v2/application/Controller/');
    define('SYSTEM_PATH', '/Projects/a-v2/system/');
    define('WEB_ENGINE', '/Projects/a-v2/system/webengine/');
    define('LIBRARIES', '/Projects/a-v2/application/Library/');
    define('MODEL', '/Projects/a-v2/application/Model/');
    define('ACCESS_LOG', '/Projects/a-v2/system/access_log/');`
    
 # to
    `define('FOLDER_PATH', '/foldername/');
    define('VIEW_PATH', '/foldername/application/View/');
    define('CONTROLLER_PATH', '/foldername/application/Controller/');
    define('SYSTEM_PATH', '/foldername/system/');
    define('WEB_ENGINE', '/foldername2/system/webengine/');
    define('LIBRARIES', '/foldername/application/Library/');
    define('MODEL', '/foldername/application/Model/');
    define('ACCESS_LOG', '/foldername/system/access_log/');`
    
    
# Database Config
  same file scroll nyo lng sa baba,.,
  
  
  
  
  # ----------------------------
  pag gagawa ka ng file.. una gawa ka muna ng file sa application/controller
  sample gagawa ka ng profile page.. save mo ung file as Profile.php
  tpos paste mo to.
  
 `class Profile extends Controller 
    {

        public function index()
        {

        }
    }`

after mo mapaste at ma save yan .. gawa ka ng view ..
sa application/View
gawa ka ng folder jan.. dun mo ilalagay ung layout html or php file na e viview sa page
sample 
foldername : Profile
Filename : myprofile.html

after nyan balik ka sa controller mo dun sa index()
ito ilalagay mo dun 
`$this->render('Profile/myprofile.html');`


kung ok na yan . para ma view mo run mo sya as 
`localhost/folderfilename/Profile/` or `localhost/folderfilename/Profile/index`

