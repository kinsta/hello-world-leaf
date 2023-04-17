![Leaf](https://user-images.githubusercontent.com/2342458/232437139-4db0eb0f-7eb7-4346-99f9-168e6cfa62ab.png)
# Kinsta - Hello World - Leaf PHP 🚀

An example of how to deploy a Leaf PHP app on Kinsta App Hosting services.

---
Kinsta is a developer-centric cloud host / PaaS. We’re striving to make it easier for you to share your web projects with your users. Focus on coding and building, and we’ll take care of deployment and provide fast, scalable hosting. + 24/7 expert-only support.

- [Start your free trial](https://kinsta.com/signup/?product_type=app-db)
- [Application Hosting](https://kinsta.com/application-hosting)
- [Database Hosting](https://kinsta.com/database-hosting)

## Dependency Management

Kinsta automatically installs dependencies defined in your `package.json` file, during the deployment process.

## Web Server Setup

### Port

Kinsta automatically sets the `PORT` environment variable. You should **not** define it yourself and you should **not** hard-code it into the application.

### Start Command

When deploying an application, Kinsta automatically creates a web process running `heroku-php-apache2`.

## Deployment Lifecycle

Whenever a deployment is initiated (through creating an application or re-deploying due to an incoming commit) the `composer install` command is run.

## What is Leaf PHP
Leaf is a slim and lightweight PHP framework focused on developer experience, usability, and high-performance code. More information is available on the [leafphp.dev](https://leafphp.dev/) website.
