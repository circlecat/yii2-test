<?php

use yii\db\Migration;

/**
 * Handles adding capital to table `country`.
 */
class m181004_113448_add_capital_column_to_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('country', 'capital', $this->string(52)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('country', 'capital');
    }
}
