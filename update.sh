#!/bin/sh

curl -s https://raw.githubusercontent.com/derphilipp/Flachwitze/main/README.md | tail -n +8 | sed 's/^- //' > flachwitze.txt

