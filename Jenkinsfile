
pipeline {
  agent any
  stages {
    stage('hadolint') {
      steps {
        sh 'hadolint dockerfiles/* | tee -a hadolint_lint.txt'
        archiveArtifacts artifacts: 'hadolint_lint.txt', followSymlinks: false
      }
    }
  }
}
