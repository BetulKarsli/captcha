<?php

namespace kouosl\captcha\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\captcha\models\Verilers;

/**
 * VerilerSearch represents the model behind the search form about `kouosl\captcha\models\Verilers`.
 */
class VerilerSearch extends Verilers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['istenen_captcha', 'karakter_sayisi', 'time', 'basari_durumu'], 'integer'],
            [['captcha_tipi'], 'safe'],
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
        $query = Verilers::find();

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
            'istenen_captcha' => $this->istenen_captcha,
            'karakter_sayisi' => $this->karakter_sayisi,
            'time' => $this->time,
            'basari_durumu' => $this->basari_durumu,
        ]);

        $query->andFilterWhere(['like', 'captcha_tipi', $this->captcha_tipi]);

        return $dataProvider;
    }
}
