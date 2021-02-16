#Important
- Please Note that I didn't had access to the private repo and I created OAuth App and did the assignment on this repo.
- Also this application should work on any repo if you have access to it.

- Note that you need to copy/rename .env-example to .env also please make sure to fill in the missing data.
  - clientId
  - clientSecret
  - owner (Burwand)
  - repo (swordfish-assignment)
  
- If you have Docker installed just run the following command under the project folder.
  - docker-compose --file docker/docker-compose.yml up --build
  - Also you will need to edit your hosts file and point swordfish.co.za to localhost
    - 127.0.0.1 swordfish.co.za
  - Now you can open your browser and go to http://swordfish.co.za:8080/

