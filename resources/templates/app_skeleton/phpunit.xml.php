<phpunit backupGlobals="true"
         backupStaticAttributes="false"
         bootstrap="vendor/autoload.php"
         cacheTokens="true"
         colors="false"
         convertErrorsToExceptions="true"
         convertNoticesToExceptions="true"
         convertWarningsToExceptions="true"
         forceCoversAnnotation="false"
         printerClass="PHPUnit\TextUI\ResultPrinter"
         processIsolation="false"
         stopOnError="false"
         stopOnFailure="false"
         stopOnIncomplete="false"
         stopOnSkipped="false"
         testSuiteLoaderClass="PHPUnit\Runner\StandardTestSuiteLoader"
         verbose="true">
    <testsuites>
        <testsuite name="All Tests Suite">
            <directory suffix="Test.php">./test</directory>
            <directory suffix=".phpt">./test</directory>
        </testsuite>
    </testsuites>
    <!--
    <logging>
        <log type="coverage-html" target="./build/coverage"
             lowUpperBound="35" highLowerBound="70" showUncoveredFiles="true" />
        <log type="coverage-xml" target="./build/logs/coverage"/>
    </logging>
-->
    <filter>
        <whitelist processUncoveredFilesFromWhitelist="true">
            <directory suffix=".php">./src</directory>
        </whitelist>
    </filter>
</phpunit>
