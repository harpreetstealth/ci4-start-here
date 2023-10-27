# Codeigniter 4 startup project
This is a sample project for codeigniter 4. 

This project uses following libraries.  
- Bootstrap
- Fontawsome 

**> No jQuery is being used, Avoid using it at all costs.**

## To setup this project
- [Install composer](https://getcomposer.org/download/), if you dont have it
- Clone the respository
- go to project root directory
- run `composer install` to install related modules

**> CI4 requires you to have an ENV file. It is also recommended to use one. A sample `ENV` file has been provided with name `sample.env`.
You need to rename the file to <code>.env</code> and save to your root directory.**

**> it is important that you uncomment and update the base url in your `.env` file **
```
    app.baseURL = ''
```
## ADMIN CREDENTIALS
**> please check the SQl file provided for admin database table. File is at `database-tables/admin.sql`. You can delete this file after if you wish**
- url: `<host>/admin`
- username: `adminuser`
- password: `demo-admin-provided`