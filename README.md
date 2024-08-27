Topics coming in the next edition:
- ✅ Load balancers from scratch (published on 10th of October)
- ✅ Terraform (published on 12th of November)
- HELM

# Fundamentals - 208 pages (Basic package)
## Building a pipeline
## nginx
- Serving static content
- CGI, FastCGI, php-fpm
- CGI
- FastCGI
- php-fpm
- nginx and PHP
- nginx and Vue
- Combined nginx config
## Deployment
- Deploy script
- Deploying from a pipeline
- Provisioning new servers

## Queues and workers 
- supervisor
- Multiple queues and priorities
- Deploying workers
- Optimizing worker processes

## Domains and HTTPS with nginx
- Domain
- HTTPS

## Optimization
- nginx worker processes and connections
- fpm processes
- opcache
- gzip
- HTTP2
- TLS1.3
- nginx cache
- Caching static content
- Caching fastcgi responses

## Backups and restore
- AWS S3
- spatie/laravel-backup
- Restore script

## Docker
- The basics in theory
- The basics in practice
- Overview of the application
- Dockerizing a Laravel API
- Dockerizing a Vue app
- Dockerizing a scheduler and a worker

## docker-compose
- Frontend
- API
- Databases
- Migrations
- nginx
- Reverse proxy
- Scheduler and worker
- supervisor


- Custom built images for MySQL and nginx
- Building images in a pipeline
- Optimizing the pipeline
  - Docker layers
  - Back to the pipeline
- Production-ready docker-compose
  - Docker named volumes vs bind mounts
- Deployment
  - Deploy script
  - Deploying from a pipeline
  - Provisioning new servers
  - update service
  - Restore
  - Rollback
  - Automatic image updates
- GitFlow
  - Pushing to develop or main
  - Opening a PR to main
  - Opening a PR to develop (feature branches)
  - Reusing jobs (composite actions)
- Final touches
  - Frontend, nginx, and proxy
  - Worker & Scheduler
- Limitations of docker-compose

# Docker Swarm - 75 pages (Plus package)
- State
- Basic concepts
- Workers, managers, and leaders
- Creating a cluster
- Application-level changes
- Deploying a stack
- Service placements
- Scaling services
  - API and nginx
  - Worker
  - Visualizing the cluster
  - Protecting the databases
  - Protecting user-facing service
  - Ingress routing mesh
- Health checks
- Restarting services
- Updating services
- Rolling back services
- Deployment
  - Deploying from a pipeline
  - Update service
  - Provisioning nodes

## Monitoring and error tracking
- Uptime
  - Uptime robot
  - DigitalOcean
- Health check monitors
  - Health checks in a cluster
- Server resource alerts
- Error tracking

# Kubernetes - 77 pages (Premium package)
- Introduction
- Basic concepts
  - Pod
  - ReplicaSet
  - Deployment
- Creating a cluster
- Managed databases
- Deploying a Laravel API
  - Configuring the deployment
  - Configs and secrets
  - Applying the deployment
  - Shortcuts
  - kubectl apply
- Deploying nginx
- Communication between nginx and FPM
- Deploying a worker
- Deploying a scheduler
- Deploying a frontend
- Running migrations in a cluster
- Caching configs
- Liveness and readiness probes
  - API probes
  - nginx probes
  - worker probes
  - frontend probes
  - timeoutSeconds
- Autoscaling pods
  - Metrics server
- Rolling update config
  - maxUnavailable
  - maxSurge
- Resource requests and limits
- Health check pods
- Exposing the application
  - Ingress
  - Ingress controller & load balancer
  - Domain & HTTPS
- Deploying the cluster from a pipeline
  - Secrets
  - Image versions
  - Ship it
  - kubectl & doctl
- Monitoring the cluster

# Serverless - 29 pages (Premium package)
- Introduction
- Platform-as-a-service
- Serverless functions
- The architecture of a code review tool
  - Overview
  - Webhook
  - Scheduler
  - Adding functions
- Serverless Laravel on AWS
  - The serverless framework
  - bref

# Load balancers from scratch - 18 pages (Premium package)
- The basics of load balancers
- nginx as a load balancer
- Managed load balancers
- Load balancing with docker-compose
- Caching with a load balancer

# Other ideas for future editions
- ✅ Load balancers from scratch
- Terraform
- HELM
- Implementing an autoscaler from sratch
- How to choose a cluster size
- Grafana Cloud
- System design of an uptime service
