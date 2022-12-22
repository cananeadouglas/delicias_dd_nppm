pipeline {
    agent any

    stages {
        stage ('Build Image') {
            steps {
                script {
                    dockerapp = docker.build("cananeadouglas/delicia_php:${env.BUILD_ID}")
                }
            }
        }
    }
}