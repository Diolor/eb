#!/bin/sh
# Assemble the migration deliverables into migration/dist/.
# Run from anywhere inside the repo; requires the wordpress-theme branch.
set -e

REPO_ROOT="$(git rev-parse --show-toplevel)"
DIST="$REPO_ROOT/migration/dist"
mkdir -p "$DIST"

git -C "$REPO_ROOT" archive --format=zip --prefix=emmauswald-bleibt/ \
  -o "$DIST/emmauswald-bleibt-theme.zip" wordpress-theme
cp "$REPO_ROOT/data/content.xml" "$DIST/content.xml"
cp "$REPO_ROOT/HANDBOOK.md" "$DIST/HANDBOOK.md"

echo "Done:"
ls -lh "$DIST"
