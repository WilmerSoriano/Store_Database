# Store_Database
Database Management: SQL is used to manage and extract information from .xlsx files.

Frontend: Build with HTML for a user-friendly interface.
Backend Control: Managed using PHP for handling logic and interactions.

NOTE:
Before running:
  * Download: XAMPP Control Panel ( As of 12/15/2024 Version v3.3.0 will work fine)
    https://www.apachefriends.org/index.html
  
  * Follow the guide (Varies based on OS)
  
  *  Once set up: press [Start] for Apache
  * Press [Start] for MySQL (The server that manages our Database queries)

==============================================================================

   1. To Insert a new item.
   One thing to consider, the primary key for the iId field in the ITEM table 
   has been set to AUTO-INCREMENT . This means the primary key will automatically 
   increment with each new item added.

   Please enable AUTO-INCREMENT in MySQL speceficslly just for iId.

   2. A new menu (option 5) has been added: "List Items"
   This allows you to view the current list of items and all changes made.
    
During running:

   1. To access the web Interface: http://localhost/Proj3/menu.php
