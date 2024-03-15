#!groovy

pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                // Checkout your code from version control
                git 'https://github.com/manumuralivakkel/ccbst/.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                // Install composer dependencies
                sh 'composer install --no-interaction --prefer-dist'
            }
        }

        stage('Run Tests') {
            steps {
                // Run PHPUnit tests
                sh 'vendor/bin/phpunit'
            }
        }

        stage('Build') {
            steps {
                // Build assets, if applicable
                sh 'php artisan build'  // Example: Run Laravel Mix or other asset compilation commands
            }
        }

        stage('Deploy') {
            steps {
                // Deploy your application
                // Example: Copy files to your server, restart services, etc.
                sh 'rsync -avz --delete /path/to/local/laravel/app/ user@yourserver:/path/to/remote/laravel/app/'
            }
        }
    }

    post {
        success {
            // Notification if the build is successful
            slackSend channel: '#your-channel', color: 'good', message: 'Build successful!'
        }
        failure {
            // Notification if the build fails
            slackSend channel: '#your-channel', color: 'danger', message: 'Build failed!'
        }
    }
}
