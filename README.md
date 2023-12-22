# yii2-angularjs-inventory-application

** The img preview folder contain images of the Inventory application. **

== Description ==

The Inventory application keep track of the products when you do your inventory.

The Inventory application is writing in Yii2 & Angularjs code.

There are 7 columns on the application:

1. Product Name is where you enter the product name.
2. Model is where you enter the product name.
3. Sku is where you enter the Sku.
4. Price is where you enter the price.
5. Status is where you enter the status.
6. Qty is where you enter the product qty.
7. Inventory Date is where you enter the inventory date.

You can also enter the products name search for a particular products.

Each columns have a sort button.

Enter the info on application click Insert button.

Click on Update button to edit info then click Insert button for the changes.

Delete button will remove the products

== Instructions ==

First you download composer.phar from getcomposer.org

Then login to your Github account to create a token to download Yii2 applications

Then you run this code either on Linux or Window:

Using shell in Linux:

composer create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic basic

Using cmd prompt in Window:

php composer create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic basic

Then you upload the angularinventory.sql file to phpmyadmin

Add these files into your basic folders:

1. The db.php file goes into the config folder
2. The inventory.css file goes into the web/css folder
3. The js folder (contains angular.min.js &  app.js) goes into the web folder
4. The Inventory.php goes into the model folder
5. The InventoryController.php goes into the controllers folder
6. The inventory folder (contains index.php which is the application) goes into the views folder

The correct way of creating model & controller files is using:

//www(dot)yourcompanyname(dot)com/web/index.php?r=gii

//localhost/basic/web/index.php?r=gii

Then transfer/copy and paste the code to the model and controller files that you created.

To access your Inventory application:

localhost:

//localhost/basic/web/index.php?r=inventory

domain:

//www(dot)yourcompanyname(dot)com/web/index.php?r=inventory

== Languages and Software==

These are the languages & software I used to create the Inventory application:

Language: HTML, CSS, Yii2 & AngularJS

Software: Atom & Gimp

-- HP Gong
