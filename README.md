# Yii CDN Integration Documentation

## Overview

This project demonstrates how to set up a Content Delivery Network (CDN) for a Yii application using Nginx. It also highlights the use of Object-Oriented Programming (OOP) principles and explains the benefits of the CDN setup.

## How to Run This Project

1. **Clone the repository:**
    ```sh
    git clone https://github.com/Ahmed-Abdelhafez98/yii-cdn-integration.git
    ```

2. **Navigate to the project directory:**
    ```sh
    cd yii-cdn-integration
    ```

3. **Build and run the Docker containers:**
    ```sh
    docker-compose up --build
    ```

4. **Access the application:**
    Open your browser and navigate to `http://localhost:8081/cdn-page` to see the CDN setup in action.
   
## Steps Taken

### Step 1: Extend Yii Asset Manager

We extended the Yii Asset Manager to serve content from a CDN and use a static folder name instead of a random one. This was achieved by creating a custom class that overrides the default behavior. This extension allowed us to configure a CDN domain and a static folder name for our assets, improving the consistency and manageability of our asset URLs.

### Step 2: Configure Yii to Use the Extended Asset Manager

We configured Yii to use the extended asset manager by updating the application configuration. This setup involved specifying the CDN domain and the static folder name within the configuration, ensuring that our assets are served from the designated CDN and stored in a consistent folder structure.

### Step 3: Create a CDN Test Page

We created a simple view to demonstrate that assets are being served from the CDN. This view was designed to include some CSS and JavaScript files, providing a clear indication that the CDN setup was functioning correctly.

### Step 4: Set Up a Local CDN-Like Environment Using Nginx

We set up a local environment to simulate CDN functionality using Nginx as a reverse proxy and caching server. This setup involved creating a Docker Compose configuration with Nginx and our Yii application, allowing us to test the CDN setup locally before deploying it to production.

## Object-Oriented Programming (OOP) Principles Used

We utilized several OOP principles in this setup:

- **Encapsulation:** Encapsulating the CDN and folder name logic within the custom asset manager class made it easier to manage and reuse.
- **Inheritance:** Extending Yii's `AssetManager` allowed us to inherit its properties and methods while adding our custom functionality.
- **Polymorphism:** By overriding the `getAssetUrl` method, we changed its behavior while keeping the same method signature, enabling flexible and customized asset URL generation.

## Benefits of This Setup

Using a CDN to serve static assets provides several benefits:

- **Improved Performance:** Assets are served from edge locations closer to the user, reducing latency and load times. This is particularly beneficial for global users, as the content is delivered from servers geographically closer to them.
- **Reduced Load on Origin Server:** Offloading asset delivery to the CDN reduces the load on the application server, improving overall performance. This allows the server to focus on processing dynamic requests and reduces the risk of server overload during high traffic periods.
- **Better Scalability:** CDNs are designed to handle high traffic volumes efficiently, ensuring your application can scale smoothly. As your application grows and attracts more users, the CDN can handle the increased load without requiring significant changes to your infrastructure.
- **Enhanced Security:** CDNs provide additional security features, such as DDoS protection and secure delivery of assets. This helps protect your application from various types of cyber threats and ensures the integrity and availability of your content.

## Created by

Ahmed Emad
