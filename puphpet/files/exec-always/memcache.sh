#!/usr/bin/env bash
sudo sed -i 's/-l.*/-l\ 0\.0\.0\.0/' /etc/memcached.conf