def pipeline {
  agent any

  stages {
    stage('Checkout Code') {
      steps {
        git branch: 'main', // Update with your branch name
                url: 'https://github.com/manumuralivakkel/ccbst.git'
      }
    }
    stage('Install Dependencies') {
      steps {
        sh 'composer install --prefer-dist --no-dev'
      }
    }
    stage('Run Unit Tests') {
      steps {
        sh 'vendor/bin/phpunit tests'
      }
    }
  }
}
