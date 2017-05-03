The app created using the Slim php framework: https://www.slimframework.com/

Deployment:
- docker build -t mev-app .
- docker run -d -p 80:80 --name app_php mev-app
