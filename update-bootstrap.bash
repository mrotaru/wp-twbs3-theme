#!/bin/bash

# link to github repository
remote="https://raw.github.com/twbs/bootstrap/3.0.0-wip/dist/"

# set download method - curl or wget
command -v curl >/dev/null 2>&1
if [ $? -eq 0 ]; then
    get_method="curl"
else
    command -v wget >/dev/null 2>&1
    [ $? -eq 0 ] && get_method="wget"
fi
[ -z "$get_method" ] && { echo "Neither wget nor curl found. Exiting..."; exit 1; }

bootstrap_dir=$(pwd)"/bootstrap"

[ -d "$bootstrap_dir" ] && rm -rf "$bootstrap_dir" && mkdir "$bootstrap_dir"
mkdir -p "$bootstrap_dir"/css
mkdir -p "$bootstrap_dir"/js

# download a single file
# $1 - url
# $2 (optional) - directory where to download the file; default: current directory
function get_file()
{
    dir=${2:-$(pwd)}
    (
    cd $dir
    case "$get_method" in
        "curl") curl -s --write-out "%{url_effective} %{http_code}\n" -O "$1" ;;
        "wget") wget --no-check-certificate --no-verbose "$1" --directory-prefix "$dir" ;;
    esac
    )
}

get_file "${remote}css/bootstrap.css" "$bootstrap_dir/css"
get_file "${remote}css/bootstrap.min.css" "$bootstrap_dir/css"

get_file "${remote}js/bootstrap.js" "$bootstrap_dir/js"
get_file "${remote}js/bootstrap.min.js" "$bootstrap_dir/js"
