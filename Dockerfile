# Base image
FROM httpd:2.4-alpine

# Copy the application files into the container
COPY . /usr/local/apache2/htdocs/


# Expose port 80
EXPOSE 80
