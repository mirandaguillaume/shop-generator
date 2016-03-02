<?php
namespace ItemBundle\Composer;

use Composer\Script\Event;

class HerokuEnvironment
{
    /**
     * Populate Heroku environment
     *
     * @param Event $event Event
     */
    public static function populateEnvironment(Event $event)
    {
        self::populateDatabase($event);
        self::populatePusher($event);
    }

    private static function populateDatabase (Event $event)
    {
        $url = getenv('CLEARDB_DATABASE_URL'); // If MySQL is chosen
        // $url = getenv('HEROKU_POSTGRESQL_IVORY_URL'); If PostgreSQL is chosen

        if ($url) {
            $url = parse_url($url);
            putenv("SYMFONY__DATABASE_HOST={$url['host']}");
            putenv("SYMFONY__DATABASE_USER={$url['user']}");
            putenv("SYMFONY__DATABASE_PASSWORD={$url['pass']}");

            $db = substr($url['path'], 1);
            putenv("SYMFONY__DATABASE_NAME={$db}");
        }
        $io = $event->getIO();
        $io->write('CLEARDB_DATABASE_URL=' . getenv('CLEARDB_DATABASE_URL'));
    }

    private static function populatePusher(Event $event)
    {
        $url = getenv('PUSHER_URL');

        if ($url) {
            $url = parse_url($url);
            putenv("SYMFONY__PUSHER_APP_ID={$url['path']}");
            putenv("SYMFONY__PUSHER_HOST={$url['host']}");
            putenv("SYMFONY__PUSHER_KEY={$url['user']}");
            putenv("SYMFONY__PUSHER_SECRET={$url['pass']}");
        }
        $io = $event->getIO();
        $io->write('PUSHER_URL=' . getenv('PUSHER_URL'));
    }
}
