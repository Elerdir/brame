#todo: pořešit aby se stáhla verze, kterou máme otestovanou. Např. FROM nginx:2-alpine
FROM nginx:alpine
ADD . /usr/share/nginx/html