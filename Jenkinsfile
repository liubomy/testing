
pipeline {
  agent any
  stages {
    stage('hadolint') {
      steps {
        sh 'docker run --rm -i hadolint/hadolint < Dockerfile | tee -a hadolint_lint.txt'
        archiveArtifacts artifacts: 'hadolint_lint.txt', followSymlinks: false
      }
    }
  }
}
