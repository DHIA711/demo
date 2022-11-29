pipeline {

      environment {
     server="jenkinssmartitpaq@51.91.56.131"
     app_path="/mnt/home2/jenkinssmartitpa/public_html"
                                           }
                  
      agent any
     
        stages {

        
            // stage('Delete old source code version'){

            //   steps {
                         
            //     sshagent (credentials: ['deploy_dev_lasweq']) {

            //      sh "echo 'stage 1'"
            //      sh './jenkins/scripts/dev/script_stage1.sh' 
                
            //                  }

            //          }

            //   post{

            //         success{
            //          echo "====++++Success++++===="
            //           }

            //         failure{
            //          echo "====++++Failure++++===="
            //           }

            //       } 

            // }


          stage('Preparation for deployment app'){

              steps {
 
                sh "echo 'stage 2'"
                   
                sh "zip -r app.zip ./app/."

                     }

              post{

                    success{
                     echo "====++++Success++++===="
                      }

                    failure{
                     echo "====++++Failure++++===="
                      }

                  } 


          }



          stage('deploy new source code version "back"'){

              steps {

                sh "echo 'stage 3'"
                         
                sshagent (credentials: ['deploy_dev_lasweq']) {

                sh 'scp -r  app.zip  ${server}:${app_path}'

                sh './jenkins/scripts/dev/script_stage3.sh'

                             }

                     }

              post{

                    success{
                     echo "====++++Success++++===="
                      }

                    failure{
                     echo "====++++Failure++++===="
                      }

                  } 
                 

          }
               

    }
 

}