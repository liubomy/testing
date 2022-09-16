pipeline {
    agent any
    tools{
        maven 'maven'
    }
    stages{
        stage('ls -la'){
            steps{
                sh 'ls -la'
            }
        }
        stage('Build docker image'){
            steps{
                script{
                    sh 'docker build -t zem3/devops-integration .'
                }
            }
        }
        stage('Push image to Hub'){
            steps{
                script{
                   withCredentials([string(credentialsId: 'dockerhub-pwd', variable: 'dockerhubpwd')]) {
                   sh 'docker login -u zem3 -p ${dockerhubpwd}'

}
                   sh 'docker push zem3/devops-integration'
                }
            }
        }
        stage('pwd'){
            steps{
                script{
                    sh 'pwd'
                }
            }
        }
    }
}
