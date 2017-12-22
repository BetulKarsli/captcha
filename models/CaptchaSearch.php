<?php

namespace kouosl\captcha\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\captcha\models\Captchas;

/**
 * CaptchaSearch represents the model behind the search form about `kouosl\captcha\models\Captchas`.
 */
class CaptchaSearch extends Captchas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ee', 'dsa', 'dsad', 'dsadas'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Captchas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ee' => $this->ee,
            'dsa' => $this->dsa,
            'dsad' => $this->dsad,
            'dsadas' => $this->dsadas,
        ]);

        return $dataProvider;
    }
}
