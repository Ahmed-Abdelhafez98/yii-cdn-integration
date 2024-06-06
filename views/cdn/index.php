<?php
$this->title = 'CDN Page';
?>

<div class="header">
    <h1>CDN Setup Documentation</h1>
</div>

<div class="content">
    <h2>Overview</h2>
    <p>This documentation outlines the steps taken to set up a CDN for our Yii application using Nginx, the use of Object-Oriented Programming (OOP) principles, and the benefits of this setup.</p>

    <h2>Step 1: Extend Yii Asset Manager</h2>
    <p>We extended the Yii Asset Manager to serve content from a CDN and use a static folder name instead of a random one. This was achieved by creating a custom class that overrides the default behavior. This extension allowed us to configure a CDN domain and a static folder name for our assets, improving the consistency and manageability of our asset URLs.</p>

    <h2>Step 2: Configure Yii to Use the Extended Asset Manager</h2>
    <p>We configured Yii to use the extended asset manager by updating the application configuration. This setup involved specifying the CDN domain and the static folder name within the configuration, ensuring that our assets are served from the designated CDN and stored in a consistent folder structure.</p>

    <h2>Step 3: Create a CDN Test Page</h2>
    <p>We created a simple view to demonstrate that assets are being served from the CDN. This view was designed to include some CSS and JavaScript files, providing a clear indication that the CDN setup was functioning correctly.</p>

    <h2>Step 4: Set Up a Local CDN-Like Environment Using Nginx</h2>
    <p>We set up a local environment to simulate CDN functionality using Nginx as a reverse proxy and caching server. This setup involved creating a Docker Compose configuration with Nginx and our Yii application, allowing us to test the CDN setup locally before deploying it to production.</p>

    <h2>Object-Oriented Programming (OOP) Principles Used</h2>
    <p>We utilized several OOP principles in this setup:</p>
    <ul>
        <li><strong>Encapsulation:</strong> Encapsulating the CDN and folder name logic within the custom asset manager class made it easier to manage and reuse.</li>
        <li><strong>Inheritance:</strong> Extending Yii's `AssetManager` allowed us to inherit its properties and methods while adding our custom functionality.</li>
        <li><strong>Polymorphism:</strong> By overriding the `getAssetUrl` method, we changed its behavior while keeping the same method signature, enabling flexible and customized asset URL generation.</li>
    </ul>

    <h2>Benefits of This Setup</h2>
    <p>Using a CDN to serve static assets provides several benefits:</p>
    <ul>
        <li><strong>Improved Performance:</strong> Assets are served from edge locations closer to the user, reducing latency and load times. This is particularly beneficial for global users, as the content is delivered from servers geographically closer to them.</li>
        <li><strong>Reduced Load on Origin Server:</strong> Offloading asset delivery to the CDN reduces the load on the application server, improving overall performance. This allows the server to focus on processing dynamic requests and reduces the risk of server overload during high traffic periods.</li>
        <li><strong>Better Scalability:</strong> CDNs are designed to handle high traffic volumes efficiently, ensuring your application can scale smoothly. As your application grows and attracts more users, the CDN can handle the increased load without requiring significant changes to your infrastructure.</li>
        <li><strong>Enhanced Security:</strong> CDNs provide additional security features, such as DDoS protection and secure delivery of assets. This helps protect your application from various types of cyber threats and ensures the integrity and availability of your content.</li>
    </ul>
</div>

<div class="footer">
    Created by Ahmed Emad
</div>